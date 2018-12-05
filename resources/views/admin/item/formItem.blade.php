@extends('template.adminlte.app')

@section('title', 'Form tambah item')

@section('menu')
    @include('admin.menu')
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
                    <form method="POST" action="{{ route('admin.item.store') }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukan nama barang"
                                       name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi"
                                       name="description"
                                       required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah item</label>
                                <input type="number" class="form-control" id="quantity"
                                       placeholder="Jumlah item" name="quantity" required>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jenis item</label>
                                <select class="form-control" data-placeholder="Pilihan jenis item"
                                        required name="type">
                                    <option disabled selected>Pilih jenis item</option>
                                    <option value="item">Barang</option>
                                    <option value="class">Ruangan</option>
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
