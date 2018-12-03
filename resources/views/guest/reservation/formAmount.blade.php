@extends('template.adminlte.app')

@section('title', 'Form peminjaman')

@section('menu')
    @include('guest.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Peminjaman
            <small>Jumlah pemesanan</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form reservasi (2/3) daftar permintaan</h3>
                    </div>
                    <form role="form" method="POST"
                          action="{{ route('guest.reservation.formConfirm', ['type' => $type]) }}">
                        {{ csrf_field() }}
                        @foreach($hiddenInputs as $name => $value)
                            <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                        @endforeach
                        <div class="box-body">
                            @foreach($items as $idx => $item)
                                <div class="form-group">
                                    {{--<label for="item-{{ $idx }}">Nama</label>--}}
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control" id="item-{{ $idx }}" readonly
                                                   value="{{ $item['name'] }}">
                                        </div>
                                        @if($type == 'class')
                                            <input type="number" name="quantity[{{ $idx }}]" value="1" hidden>
                                        @elseif($type == 'item')
                                            <div class="col-xs-3">
                                                <input type="number" name="quantity[{{ $idx }}]"
                                                       placeholder="Jumlah peminjaman" style="width: 100%"
                                                       max="{{ $item->quantity }}" required>
                                            </div>
                                            <div class="col-xs-3">
                                                <p>Maksimal {{ $item->quantity }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <input type="hidden" name="items[{{ $idx }}]" value="{{ $item['id'] }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
