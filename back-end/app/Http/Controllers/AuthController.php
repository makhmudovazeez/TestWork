<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('api')->except('login');
    }

    public function login(LoginRequest $request){

        if($token = Auth::attempt($request->validated())){
            return response()->json([
                'token' => $this->respondWithToken($token),
                'error' => null,
            ], 200);
        }

        return response()->json([
            'error' => 'Unauthorized'
        ], 401);
    }

    public function logout(Request $request){
        auth('api')->logout();
        return response()->json(['message' => 'Success'], 200);
    }

    public function refresh(){
        return response()->json(
            $this->respondWithToken(auth('api')->refresh()
        ));
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }
}
