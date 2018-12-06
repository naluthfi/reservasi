@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Daftar Item
        </h1>
    </section>
    <section class="content">
        @if(!empty($message))
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-info"></i> Info!</h4>
                {{ $message }}
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box">
                        <div class="box-header">
                            {{--<h3 class="box-title">Data Table With Full Features</h3>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="data-item" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Jenis item</th>
                                    <th>Pilihan</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        @if($item->type == 'item')
                                            <td>Barang</td>
                                        @elseif($item->type == 'class')
                                            <td>Kelas</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('admin.item.edit', ['id' => $item->id]) }}">
                                                <button type="button" class="btn btn-block btn-info">Ubah</button>
                                            </a>
                                            <a href="{{ route('admin.item.delete', ['id' => $item->id]) }}">
                                                <button type="button" class="btn btn-block btn-danger">Hapus</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Deskripsi</th>
                                    <th>Jumlah</th>
                                    <th>Jenis item</th>
                                    <th>Pilihan</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script type="text/javascript">
        $(function () {
            $('#data-item').DataTable()
        });
    </script>
@endsection