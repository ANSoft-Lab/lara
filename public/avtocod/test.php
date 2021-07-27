<?php

require 'vendor/autoload.php';

use Avtocod\B2BApi\Client;
use Avtocod\B2BApi\Settings;
use Avtocod\B2BApi\Tokens\Auth\AuthToken;

try {
if(getenv("REQUEST_METHOD") == 'POST') {

$t = microtime(1);

$client = new Client(new Settings(AuthToken::generate('i_bogdanov_integration', 'SLZsRagq', 'finist'), 'https://b2b-api.spectrumdata.ru/b2b/api/v1/'));

$report_uid = $client
    ->userReportMake(
        (new \Avtocod\B2BApi\Params\UserReportMakeParams('report_autocomplete_test', 'GRZ', $_POST['grz']))
            ->setForce(true)
//            ->setOnUpdateUrl('https://example.com/webhook/updated')
//            ->setOnCompleteUrl('https://example.com/webhook/completed')
    )
    ->first()
    ->getReportUid();

// Wait for report is ready
while (true) {
    $user_report_params = (new \Avtocod\B2BApi\Params\UserReportParams($report_uid))->setIncludeContent(false);
    if ($client->userReport($user_report_params)->first()->isCompleted()) {
        break;
    }

    \sleep(1);
}

$content = $client->userReport(new \Avtocod\B2BApi\Params\UserReportParams($report_uid))->first()->getContent();

$vin_code  = $content->getByPath('identifiers.vehicle.vin');   // (string) 'JTMHX05J704083922'
$engine_kw = $content->getByPath('tech_data.engine.power.kw'); // (int) 227

if($content) {
    echo $content->getByPath('tech_data.brand.name.normalized')." ".$content->getByPath('tech_data.model.name.normalized')." ".$content->getByPath('tech_data.year');
    echo "<p>".round(time()-$t, 2)." sec";

    echo "<pre>";
    print_r($content);
    echo "</pre>";
}

}
} catch(\Exception $e) {
  echo "Not found";
}

?>
<p>
<form method='post' action=''><input type='text' name='grz' value='<?=(isset($_POST['grz']) ? preg_replace("/'/", "", $_POST['grz']) : 'H001BP50')?>'> <input type='submit' value='check'></form>
</p>