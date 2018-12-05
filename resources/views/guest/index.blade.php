@extends('template.adminlte.app')

@section('title', 'Dashboard')

@section('menu')
    @include('guest.menu')
@endsection

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div style="margin-bottom:3px;
                        background:#fff;
                        border-radius:10px;
                        padding:10px;
                        border-left:12px solid #eee;
                        border-top:12px solid #eee;
                        border-right:12px solid #eee;
                        border-bottom:12px solid #eee;">
                        <div class="products text-center">
                            <h3>Selamat Datang di Laman Reservasi Departemen Manajemen Bisnis ITS</h3>
                            <div>
                                Website ini merupakan platform untuk melakukan pengajuan peminjaman barang dan ruangan yang dimiliki oleh Departemen Manajemen Bisnis ITS.
                            </div>
                        </div>    
                    </div>                        
                </div>
            </div>
        </div>
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
          <div class="col-md-12">
            <div class="row">
                <div class="col-md-5">
                    <div style="margin-bottom:30px;
                       background:#fff;
                       border-radius:10px;
                       padding:10px;
                       border-left:1px solid #eee;
                       border-top:1px solid #eee;
                       border-right:2px solid #eee;
                       border-bottom:2px solid #eee;">
                       <div style="min-height: 40px;
                           font-size: 16px;
                           background:#f5f5f5;
                           border-top-left-radius:5px;
                           border-top-right-radius:5px;
                           padding:10px;
                           border-left:0px solid #eee;
                           border-top:0px solid #eee;
                           border-right:2px solid #eee;">
                            <div class="panel-title"><strong>Ketentuan Peminjaman</strong></div>
                        </div>
                            <div class="collapsible-body">
                                <ol>
                                    <li>Setiap peminjaman barang dan atau ruangan diharuskan mengisi formulir yang tersedia pada laman website ini.</li>
                                    <li>Persetujuan reservasi oleh Kepala Departemen berkoordinasi dengan Penanggung Jawab Ruangan atau Barang didasarkan atas skala prioritas dan potensi gangguan (keamanan, kebisingan) dengan kegiatan dalam waktu yang sama.</li>
                                    <li>
                                        Setelah semua proses peminjaman ruangan disetujui, peminjam menghubungi Penanggung Jawab Ruangan atau Barang untuk mendapatkan kunci:
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
                    </div>
                </div>

                        <div class="col-md-7">
                    <div style="margin-bottom:30px;
                       background:#fff;
                       border-radius:10px;
                       padding:10px;
                       border-left:1px solid #eee;
                       border-top:1px solid #eee;
                       border-right:2px solid #eee;
                       border-bottom:2px solid #eee;">
                        <div style="min-height: 40px;
                           font-size: 16px;
                           background:#f5f5f5;
                           border-top-left-radius:5px;
                           border-top-right-radius:5px;
                           padding:10px;
                           border-left:0px solid #eee;
                           border-top:0px solid #eee;
                           border-right:0px solid #eee;">
                            <div class="panel-title"><strong>Tata Tertib</strong></div>
                        </div>
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
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
