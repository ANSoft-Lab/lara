<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeedbackStore;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(FeedbackStore $request)
    {
        $feedback = new Feedback;
        
        $feedback->fill($request->all());
        $feedback->save();

        return response()->json([
            'message' => 'Заявка принята',
        ]);
    }
}
