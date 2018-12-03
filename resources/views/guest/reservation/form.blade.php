@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('guest.menu')
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
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukan nama peminjam">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="institution">Institusi peminjam</label>
                                <input type="text" class="form-control" id="institution"
                                       placeholder="Institusi yang diwakili peminjam">
                            </div>
                            <div class="form-group">
                                <label for="reservationtime">Rentang peminjaman</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="text" class="form-control" id="reservationtime"
                                           name="reservation_time">
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
    <script type="text/javascript">
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'})
    </script>
@endsection
