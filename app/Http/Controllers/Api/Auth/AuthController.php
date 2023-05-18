<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        try {
            $result = Auth::attempt(['email' => $request['email'], 'password' => $request['password']]);
            if ($result){
                $user = Auth::user();
                $token = $user->createToken('userToken')->plainTextToken;
        
            
                return [
                    'response'      => true,
                    'status'        => 200,
                    'data' => [
                        'user' => $user,
                        'token' => $token,
                        'token_type' => 'Bearer',
                    ],
                ];
            }

            return [
                'response' => false,
                'status' => 409,
                'message' => 'Email or Password mismatch!',
            ];
        } catch (\Throwable $th) {
            return [
                'error' => $th->getMessage(),
            ];
        }
    }
}
