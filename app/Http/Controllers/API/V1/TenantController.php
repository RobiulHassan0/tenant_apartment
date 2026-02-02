<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tenant\StoreTenantRequest;
use App\Http\Resources\Tenant\TenantCollection;
use App\Models\Tenant;
use Exception;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index()
    {
        $tenants = Tenant::all();

        return response()->json([
            'message' => 'Tenant retrived successfully',
            'tenants-data' => new TenantCollection($tenants)
        ], 201);
    }

    public function store(StoreTenantRequest $request)
    {
        $validateData = $request->validated();
        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('tenant', 'public');
                $tenant = Tenant::create([
                    'name' => $validateData['name'],
                    'phone' => $validateData['phone'],
                    'image' => $imagePath,
                ]);

                return response()->json([
                    'message' => 'Tenant created successfully',
                    'tenant-data' => $tenant
                ], 201);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Tenant creation failed',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }



}
