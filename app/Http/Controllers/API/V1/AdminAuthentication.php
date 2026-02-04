<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\AdminLoginRequest;
use App\Http\Requests\AdminAuth\AdminRegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Resources\AdminAuth\AdminAuthResource;

class AdminAuthentication extends Controller
{
    public function register(AdminRegisterRequest $request)
    {
        $validatedData = $request->validated();

        $imagePath = null;
        if($imagePath){
            $imagePath = $request->file('image')->store('admin', 'public');
        }

        $user = User::create([ 
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        return response()->json([
            'message' => 'User registered successfully!',
            'created_user_data' => new AdminAuthResource($user),
        ], 201);

    }
    
    public function login(AdminLoginRequest $request){
        $validateData = $request->validated();
        $admin = User::where('email', $validateData['email'])->first();

        if(!$admin || !Hash::check($validateData['password'], $admin->password)){
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password',
            ]);
        }

        $admin->tokens()->delete();
        $token = $admin->createToken('admin-token')->plainTextToken;

        return response()->json([
            'message' => 'User logged in successfully.',
            'token_type' => 'Bearer', 
            'access_token' => $token,
            'user' => new AdminAuthResource($admin)

        ], 200);
    }

    
    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'User logout successfully',
        ], 200);
    }
}
