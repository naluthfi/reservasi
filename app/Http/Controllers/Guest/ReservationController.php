<?php

namespace App\Http\Controllers\Guest;


use App\Models\Items;
use App\Models\ReservationRequest;
use Carbon\Carbon;
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

    public function reserve(Request $request)
    {
        $items = Items::find($request->items);
        $reservationRequest = new ReservationRequest();
        $reservationRequest->setAttribute('name', $request->name);
        $reservationRequest->setAttribute('email', $request->email);
        $reservationRequest->setAttribute('institution', $request->institution);
        $reservationRequest->setAttribute('start_time', new Carbon($request->start_time));
        $reservationRequest->setAttribute('end_time', new Carbon($request->end_time));
        $reservationRequest->setAttribute('status', ReservationRequest::STATUS_PENDING);
        $reservationRequest->setAttribute('type', $request->type);
        $reservationRequest->save();

        $attachments = [];
        foreach ($items as $idx => $item) {
            $attachments[$item->id] = [
                'quantity' => $request->quantities[$idx]
            ];
        }
        $reservationRequest->items()->attach($attachments);
        return redirect(route('guest.dashboard.index'))
            ->with('status', "Permohonan peminjaman berhasil dibuat dengan nomor peminjaman $reservationRequest->id");
    }

    public function readStatus()
    {
        $reservationRequest = ReservationRequest::all();
        $data = [
            'requests' => $reservationRequest
        ];
        return view('guest.reservation.status', $data);
    }
}
