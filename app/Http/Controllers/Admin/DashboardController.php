<?php

namespace App\Http\Controllers\Admin;


use Illuminate\View\View;

class DashboardController
{
    public function index(): View
    {
        return view('admin.index');
    }
}
