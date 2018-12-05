<?php

namespace App\Http\Controllers\Admin;


class ItemController
{
    public function create(){
        return view('admin.item.formItem');
    }
}