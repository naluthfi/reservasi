@extends('template.adminlte.app')

@section('title', 'Edit item')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Ubah data item
            <small>Masukan data baru</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Form data item baru</h3>
                    </div>
                    <form method="POST" action="{{ route('admin.item.update', ['id' => $item->id]) }}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukan nama barang"
                                       name="name" required value="{{ $item->name }}">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi"
                                       name="description"
                                       required value="{{ $item->description }}">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jumlah item</label>
                                <input type="number" class="form-control" id="quantity"
                                       placeholder="Jumlah item" name="quantity" required value="{{ $item->quantity }}">
                            </div>
                            <div class="form-group">
                                <label for="quantity">Jenis item</label>
                                <select class="form-control" data-placeholder="Pilihan jenis item"
                                        required name="type">
                                    <option disabled>Pilih jenis item</option>
                                    <option value="item" {{ $item->type == 'item' ? 'selected':'' }} >Barang</option>
                                    <option value="class" {{ $item->type == 'class' ? 'selected':'' }} >Ruangan</option>
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
