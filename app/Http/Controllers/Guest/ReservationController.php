<?php

namespace App\Http\Controllers\Guest;


use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController
{
    public function showForm(Request $request): View
    {
        $data = [
            'type' => $request->get('type')
        ];
        return view('guest.reservation.form', $data);
    }
}
