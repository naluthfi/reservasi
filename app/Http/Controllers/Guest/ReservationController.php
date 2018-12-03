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
        $times = explode(' - ', $request->reservation_time);
        $items = Items::find($request->items);
        $hiddenInputs = [
            'name' => $request->name,
            'email' => $request->email,
            'institution' => $request->institution,
            'start_time' => $times[0],
            'end_time' => $times[1],
        ];
        $data = [
            'hiddenInputs' => $hiddenInputs,
            'items' => $items,
            'type' => $request->type,
        ];
        return view('guest.reservation.formAmount', $data);
    }

    public function showFormConfirm(Request $request): View
    {
        $items = Items::find($request->items);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'institution' => $request->institution,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'items' => $items,
            'quantities' => $request->quantity,
            'type' => $request->type,
        ];
        return view('guest.reservation.formConfirm', $data);
    }

    public function reserve(Request $request): View
    {
        dd($request->all());
    }
}
