<?php

namespace App\Http\Controllers;

use App\Http\Requests\FeedbackStore;
use App\Models\Feedback;
use App\Models\Bitrix24;
use Illuminate\Http\JsonResponse;
//use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Store feedback
     *
     * @param  \App\Models\Feedback  $feedback
     * @param  \App\Http\Requests\FeedbackStore  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Feedback $feedback, FeedbackStore $request): JsonResponse //
    {
        $lead = $feedback->create($request->all());
        if($response = Bitrix24::sendLead($request))
        {
            $lead->bitrix24_res = json_encode($response);
            $lead->bitrix24_lead_id = @$response->ID;
        }

        if($request->hasFile('uploaded_file')) {
            $filefolder = 'uploaded/vacancies/' . $lead->entity_id;
            $filename = date('YmsHis') . '.' . $request->uploaded_file->extension();
            $request->uploaded_file->storeAs('public/' . $filefolder, $filename);
            $lead->file = $filefolder . '/' . $filename;
        } elseif($request->has('file_url')) {
            $lead->file = $request->file_url;
        }
        $lead->save();

        return response()->json([
            'status' => 200,
            'message' => 'Заявка принята. Менеджер свяжется с вами в течение часа!',
        ]);
    }
}
