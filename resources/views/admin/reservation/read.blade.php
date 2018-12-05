@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Daftar peminjaman
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
                            <table id="data-reservasi" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nomor reservasi</th>
                                    <th>Nama peminjam</th>
                                    <th>Organisasi</th>
                                    <th>Email</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($requests as $request)
                                    <tr>
                                        <td>{{ $request->id }}</td>
                                        <td>{{ $request->name }}</td>
                                        <td>{{ $request->institution }}</td>
                                        <td>{{ $request->email }}</td>
                                        @if($request->type == 'item')
                                            <td>Barang</td>
                                        @elseif($request->type == 'class')
                                            <td>Kelas</td>
                                        @endif
                                        <td>{{ $request->status }}</td>
                                        <td>
                                            <a href="#">
                                                <button type="button" class="btn btn-block btn-info">Detail</button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama peminjam</th>
                                    <th>Organisasi</th>
                                    <th>Email</th>
                                    <th>Jenis</th>
                                    <th>Status</th>
                                    <th>Detail</th>
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
            $('#data-reservasi').DataTable()
        });
    </script>
@endsection