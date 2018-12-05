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

    public function detail($id): View
    {
        $reservationRequest = ReservationRequest::find($id);
        $data = [
            'request' => $reservationRequest
        ];
        return view('admin.reservation.detail', $data);
    }

    public function action($id, Request $request)
    {
        $reservationRequest = ReservationRequest::find($id);
        if ($request->action == 'accept') {
            $reservationRequest->status = ReservationRequest::STATUS_ACCEPTED;
        } else {
            $reservationRequest->status = ReservationRequest::STATUS_REJECTED;
        }
        $reservationRequest->save();
        return redirect(route('admin.reservation.read'))->with('status', 'Transaksi berhasil');
    }
}
