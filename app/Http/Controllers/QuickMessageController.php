<?php

namespace App\Http\Controllers;

use App\Models\quickMessage;
use Illuminate\Http\Request;

class QuickMessageController extends Controller
{
    public function quickMessage(Request $request)
    {
        $quickMessage = new quickMessage;
        $quickMessage->fullname = $request->fullname;
        $quickMessage->contact = $request->contact;
        $quickMessage->message = $request->message;
        if ($quickMessage->save()) {
            return response()->json([
                'status' => 'success',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
            ], 502);
        }
    }
}
