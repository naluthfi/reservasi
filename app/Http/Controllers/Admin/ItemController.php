<?php

namespace App\Http\Controllers\Admin;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemController
{
    public function create()
    {
        return view('admin.item.formItem');
    }

    public function store(Request $request)
    {
        $item = new Items();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->type = $request->type;
        $item->save();
        return redirect(route('admin.item.create'))->with('status', "Data $item->name berhasil disimpan");
    }

    public function read(Request $request)
    {
        $items = Items::all();
        $data = [
            'items' => $items
        ];
        return view('admin.item.read', $data);
    }

    public function edit($id)
    {
        $item = Items::find($id);
        $data = [
            'item' => $item
        ];
        return view('admin.item.edit', $data);
    }

    public function update($id, Request $request)
    {
        $item = Items::find($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->quantity = $request->quantity;
        $item->type = $request->type;
        $item->save();
        return back()->with('status', 'Update data sukses');
    }
}