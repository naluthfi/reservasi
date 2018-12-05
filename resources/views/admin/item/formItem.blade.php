@extends('template.adminlte.app')

@section('title', 'Form peminjaman')

@section('menu')
    @include('guest.menu')
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css') }}">
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Pendaftaran Item Baru
            <small>Isi data item</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form data item baru</h3>
                    </div>
                    <form >
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukan nama barang"
                                       name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" name="deskripsi"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah item</label>
                                <input type="text" class="form-control" id="quantity"
                                       placeholder="Jumlah item" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jenis item</label>
                                <select class="form-control select" multiple="multiple" data-placeholder="Pilihan"
                                        required
                                        style="width: 100%;" name="items[]">
                                        <option value="item">barang</option>
                                        <option value="class">ruangan</option>
                                </select>
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
        $('.select2').select2();
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            startDate: moment(),
            endDate: moment().add(30, 'minute'),
            locale: {
                format: 'DD/MM/YYYY HH:mm'
            }
        })
    </script>
@endsection
