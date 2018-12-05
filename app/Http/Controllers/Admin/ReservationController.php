<?php

namespace App\Http\Controllers\Admin;


use Illuminate\View\View;

class ReservationController
{
    public function read(): View
    {
        return view('admin.reservation.read');
    }
}
