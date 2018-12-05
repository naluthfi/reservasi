<?php

namespace App\Http\Controllers\Admin;


use App\Models\ReservationRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController
{
    public function read(Request $request): View
    {
        $query = ReservationRequest::query();
        if (isset($request->type)) {
            $query = $query->where('type', $request->type);
        }
        if (isset($request->status)) {
            $query = $query->where('status', $request->status);
        }
        $requests = $query->get();
        $data = [
            'requests' => $requests
        ];
        return view('admin.reservation.read', $data);
    }
}
