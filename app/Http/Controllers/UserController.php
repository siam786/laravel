<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        $secret_key = 5878;
        $user_key = $request->user_key;

        $data = [
            'user_name' => 'siam',
            'designation' => 'web devloper',
            'mobile' => '01742080475',
            'bac acc' => 'brack0141524',
        ];

        if ($secret_key == $user_key) {
            return response()->json([
                'user_info' => $data,
            ]);
        } else {
            return response(
                [
                    'message' => 'Please Provide valid key',
                ],
                404
            );
        }
    }
}
