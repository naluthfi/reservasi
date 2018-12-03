<?php

namespace App\Http\Controllers\Guest;


use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController
{
    public function showForm(Request $request): View
    {
        $data = [
            'type' => $request->type
        ];
        return view('guest.reservation.form', $data);
    }

    public function showFormAmount(Request $request): View
    {
        dd($request->all());
    }
}
