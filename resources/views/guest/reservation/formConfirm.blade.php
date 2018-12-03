@extends('template.adminlte.app')

@section('title', 'Form peminjaman')

@section('menu')
    @include('guest.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Peminjaman
            <small>Konfirmasi peminjaman</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form reservasi (3/3) Konfirmasi peminjaman</h3>
                    </div>
                    <form role="form" method="POST"
                          action="{{ route('guest.reservation.reserve', ['type' => $type]) }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name"
                                       name="name" value="{{ $name }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email"
                                       name="email" value="{{ $email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="institution">Institusi</label>
                                <input type="text" class="form-control" id="institution"
                                       name="institution" value="{{ $institution }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="start_time">Waktu mulai peminjaman</label>
                                <input type="text" class="form-control" id="start_time"
                                       name="start_time" value="{{ $start_time }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="end_time">Waktu akhir peminjaman</label>
                                <input type="text" class="form-control" id="end_time"
                                       name="end_time" value="{{ $end_time }}" readonly>
                            </div>
                            <label>Daftar reservasi</label>
                            @foreach($items as $idx => $item)
                                <div class="form-group">
                                    <input type="hidden" name="items[{{ $idx }}]" value="{{ $item->id }}">
                                    <input type="hidden" name="quantities[{{ $idx }}]" value="{{ $quantities[$idx] }}">
                                    @if($type == 'item')
                                        <input type="text" class="form-control" id="items-{{ $idx }}"
                                               value="{{ $quantities[$idx] }} - {{ $item->name }}" readonly>
                                    @elseif($type == 'class')
                                        <input type="text" class="form-control" id="items-{{ $idx }}"
                                               value="{{ $item->name }}" readonly>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
