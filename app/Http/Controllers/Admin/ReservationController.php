<?php

namespace App\Http\Controllers\Admin;


use App\Models\ReservationRequest;
use Illuminate\View\View;

class ReservationController
{
    public function read(): View
    {
        $requests = ReservationRequest::all();
        $data = [
            'requests' => $requests
        ];
        return view('admin.reservation.read', $data);
    }
}
