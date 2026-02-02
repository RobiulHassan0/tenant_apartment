<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Apartment\StoreApartmentRequest;
use App\Http\Resources\Apartment\ApartmentCollection;
use App\Models\Apartment;
use Exception;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index(){
        $apartments = Apartment::with('currentBooking.tenant')->get();

        return response()->json([
            'message' => 'apartments retrived successfully',
            'apartment-data' => new ApartmentCollection($apartments),
        ], 200);
    }

    public function store(StoreApartmentRequest $request){
        $validateData = $request->validated();
        try{
            $imagePath = null;
            if($request->hasFile('image')){
                $imagePath = $request->file('image')->store('apartment', 'public');
                $apartment = Apartment::create([
                    'name' => $validateData['name'],
                    'rent' => $validateData['rent'],
                    'image' => $imagePath,
                ]);

                return response()->json([
                    'message' => 'Apartment created successfully',
                    'apartments-data' => $apartment
                ], 201);
            }
        }catch(Exception $e){
            return response()->json([
                'message' => 'Apartment creation failed',
                'errors' => $e->getMessage(),
            ], 500);
        }
    }
}
