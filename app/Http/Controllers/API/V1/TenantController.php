<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\TenantRegisterRequest;
use App\Http\Requests\Tenant\TenantLoginRequest;
use App\Http\Resources\Tenant\TenantCollection;
use App\Http\Resources\Tenant\TenantResource;
use App\Models\Tenant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class TenantController extends Controller
{

    public function register(TenantRegisterRequest $request)
    {
        $validateData = $request->validated();

        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('tenant', 'public');
            }

            $tenant = Tenant::create([
                'name' => $validateData['name'],
                'phone' => $validateData['phone'],
                'password' => Hash::make($validateData['password']),
                'image' => $imagePath,
            ]);

            return response()->json([
                'message' => 'Tenant created successfully',
                'tenant-data' => new TenantResource($tenant),
            ], 201);

        } catch (Exception $e) {
            return response()->json([
                'message' => 'Tenant creation failed',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }

    public function login(TenantLoginRequest $request)
    {
        $validateData = $request->validated();
        $tenant = Tenant::where('phone', $validateData['phone'])->first();

        if (!$tenant || !Hash::check($validateData['password'], $tenant->password)) {
            throw ValidationException::withMessages([
                'phone' => 'Invalid phone number or password',
            ]);
        }

        $tenant->tokens()->delete();
        $token = $tenant->createToken('tenant-token')->plainTextToken;

        return response()->json([
            'message' => 'Tenant logged in successfully.',
            'token_type' => 'Bearer',
            'access_token' => $token,
            'tenant_user' => new TenantResource($tenant)

        ], 200);
    }

        public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'message' => 'Tenant logout successfully',
        ], 200);
    }

    public function index(){
        return view('frontend.dashboard');
    }

}
