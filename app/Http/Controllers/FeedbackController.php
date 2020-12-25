<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\FeedbackStore;

class FeedbackController extends Controller
{
    /**
     * Store feedback
     * @param  \App\Models\Feedback  $feedback
     * @param  \App\Http\Requests\FeedbackStore  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Feedback $feedback, FeedbackStore $request): JsonResponse
    {

        $feedback->fill($request->all());
        $feedback->save();

        return response()->json([
            'message' => 'Заявка принята',
        ]);
    }
}
