<?php

namespace App\Http\Controllers\Guest;


use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController
{
    public function showForm(Request $request): View
    {
        $items = Items::where('type', '=', $request->type)->get();

        $data = [
            'type' => $request->type,
            'items' => $items
        ];
        return view('guest.reservation.form', $data);
    }

    public function showFormAmount(Request $request): View
    {
        dd($request->all());
    }
}
