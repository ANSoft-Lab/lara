<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\FeedbackStore;
use App\Models\Bitrix24;

class FeedbackController extends Controller
{
    /**
     * Store feedback
     *
     * @param  \App\Models\Feedback  $feedback
     * @param  \App\Http\Requests\FeedbackStore  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Feedback $feedback, FeedbackStore $request): JsonResponse
    {
        logger(print_r($request->all(), true));
        $lead = $feedback->create($request->validated());
        if($response = Bitrix24::sendLead($request))
        {
            $lead->bitrix24_res = json_encode($response);
            $lead->bitrix24_lead_id = @$response->ID;
        }
        $lead->save();

        return response()->json([
            'status' => 200,
            'message' => 'Заявка принята. Менеджер свяжется с вами в течение часа!',
        ]);
    }
}
