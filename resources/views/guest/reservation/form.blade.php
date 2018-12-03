@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('guest.menu')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Peminjaman
            {{--<small>Yang ini subjudul</small>--}}
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form reservasi (1/3)</h3>
                    </div>
                    <form role="form" method="POST"
                          action="{{ route('guest.reservation.formAmount', ['type' => $type]) }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukan nama peminjam"
                                       name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="institution">Institusi peminjam</label>
                                <input type="text" class="form-control" id="institution"
                                       placeholder="Institusi yang diwakili peminjam" name="institution" required>
                            </div>
                            <div class="form-group">
                                @if($type == 'item')
                                    <label>Barang yang akan dipinjam</label>
                                @elseif($type == 'class')
                                    <label>Kelas yang akan dipinjam</label>
                                @endif
                                <select class="form-control select2" multiple="multiple" data-placeholder="Pilihan"
                                        required
                                        style="width: 100%;" name="items[]">
                                    @foreach($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reservationtime">Rentang peminjaman</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="text" class="form-control" id="reservationtime"
                                           name="reservation_time" required>
                                </div>
                            </div>
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

@section('script')
    <script src="{{ asset('adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $('.select2').select2()
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            startDate: moment(),
            endDate: moment().add(30, 'minute'),
            locale: {
                format: 'DD/MM/YYYY HH:mm A'
            }
        })
    </script>
@endsection
