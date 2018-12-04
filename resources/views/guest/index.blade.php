@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('guest.menu')
@endsection

@section('content')
    <section class="content-header">
        <h1>
            Ini dashboard
            <small>Yang ini subjudul</small>
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
            <div class="container" style="width:80%">
                <div class="row" style="padding:0.5rem;">
                    <ul class="collapsible expendable popout">
                        <div class="wrapper bordered">
                            <div class="container content">
                                <div class="products text-center">
                                    <h3>Selamat Datang di Laman Reservasi Departemen Manajemen Bisnis ITS</h3>
                                    <div>
                                        Website ini berisi informasi dan pengajuan peminjaman barang dan ruangan yang dimiliki oleh Departemen Manajemen Bisnis ITS.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <li class="active">
                            <div class="collapsible-header"><strong>Ketentuan Peminjaman</strong></div>
                            <div class="collapsible-body">
                                <ol>
                                    <li>Peminjaman barang dan atau ruangan diawali dengan mengisi formulir yang terdapat pada website ini.</li>
                                    <li>Persetujuan reservasi oleh Kepala Departemen berkoordinasi dengan <strong>Penanggung Jawab Ruangan atau Barang</strong> didasarkan atas skala prioritas dan potensi gangguan (keamanan, kebisingan) dengan kegiatan waktu yang sama.</li>
                                    <li>
                                        Setelah semua proses peminjaman ruangan disetujui, peminjam menghubungi <strong>Penanggung Jawab Ruangan atau Barang</strong> untuk mendapatkan kunci:
                                        <strong>
                                            <ul>
                                                <li>Ruang Kelas - Eko Cahyono</li>
                                                <li>Ruang Aula - Wisnu Adi</li>
                                                <li>Barang Elektronik - Rusmadi</li>
                                                <li>Barang Non-Elektronik - Samijan</li>
                                            </ul>
                                        </strong>
                                    </li>
                                </ol>
                            </div>
                        </li>
                        <br>
                        <li>
                            <div class="collapsible-header"><strong>Tata Tertib</strong></div>
                            <div class="collapsible-body">
                                <ol>
                                    <li>Pengajuan peminjaman ruangan maksimal 2 minggu sebelum pelaksanaan kegiatan.</li>
                                    <li>Pengajuan peminjaman barang maksimal 1 minggu sebelum pelaksanaan kegiatan.</li>
                                    <li>Peminjam barang maupun ruang wajib meninggalkan kartu identitas sebagai jaminan dan akan dikembalikan saat pengembalian barang atau kunci ruangan.</li>
                                    <li>Penggunaan ruang hanya diperbolehkan hingga maksimal pukul 20:00.</li>
                                    <li>Peminjam barang wajib melakukan pemeriksaan kondisi barang yang akan digunakan sebelum maupun sesudah digunakan untuk memastikan keadaan kondisi barang dalam keadaan baik.</li>
                                    <li>Tidak dibenarkan meninggalkan ruang dalam keadaan kosong dan tidak terkunci.</li>
                                    <li>
                                        Jika terjadi kerusakan barang maupun inventaris ruangan karena kelalaian/kecerobohan pemakaian maka yang bersangkutan diberi sanksi untuk:
                                        <ol type="a">
                                            <li>Memperbaiki barang tersebut apabila kerusakan tersebut dapat diperbaiki.</li>
                                            <li>Mengganti dengan barang yang baru apabila kerusakan tersebut tidak bisa diperbaiki.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </section>
@endsection
