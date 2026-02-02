<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Apartment\ApartmentResource;
use App\Http\Resources\Booking\BookingResource;
use App\Models\Apartment;
use App\Models\Booking;
use App\Models\Tenant;
use Illuminate\Http\Request;

use function Symfony\Component\Clock\now;

class DashboardController extends Controller
{
    public function summary(){
        $occupiedBookings  = Booking::whereDate('start_date', '<=', now())
        ->whereDate('end_date', '>=', now())
        ->with('apartment', 'tenant')
        ->get();

        $reservedBookings  = Booking::where(function ($q) { 
            $q->whereDate('start_date', '>', now()); })
            ->with('apartment', 'tenant')
            ->get(); 

        $vacantApartments = Apartment::whereDoesntHave('bookings', function ($q) {
            $q->whereDate('start_date', '<=', now())->whereDate('end_date', '>=', now());
        })->get();

        return response()->json([
            'total_apartments' => Apartment::count(),
            'total_tenants' => Tenant::count(),
            'total_bookings' => Booking::count(),

            'total_occupied_Bookings (active)' => $occupiedBookings ->count(),
            'total_reserved_Bookings (inactive)' => $reservedBookings->count(),
            'total_vacant_apartments' => $vacantApartments->count(),
            
            'occupied_Bookings (active)' => BookingResource::collection($occupiedBookings ),
            'reserved_booked_apartments' => BookingResource::collection($reservedBookings ),
            'vacant_apartments' => ApartmentResource::collection($vacantApartments),

            // 'booked_apartments' => ApartmentResource::collection(
            //     Apartment::whereHas('currentBooking')->get()
            // ),
            // 'vacant_apartments' => ApartmentResource::collection(
            //     Apartment::whereDoesntHave('currentBooking')->get()
            // )
        ]);
    }

}
