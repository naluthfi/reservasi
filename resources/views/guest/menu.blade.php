@auth
    <li>
        <a href="{{ route('admin.dashboard.index') }}">
            <i class="fa fa-home"></i> <span>Halaman admin</span>
        </a>
    </li>
@endauth
<li>
    <a href="{{ route('guest.dashboard.index') }}">
        <i class="fa fa-home"></i> <span>Beranda</span>
    </a>
</li>
<li>
    <a href="{{ route('guest.reservation.form', ['type' => 'item']) }}">
        <i class="fa fa-cube"></i> <span>Request peminjaman barang</span>
    </a>
</li>
<li>
    <a href="{{ route('guest.reservation.form', ['type' => 'class']) }}">
        <i class="fa fa-bank"></i> <span>Request peminjaman kelas</span>
    </a>
</li>
<li>
    <a href="{{ route('guest.reservation.status') }}">
        <i class="fa fa-home"></i> <span>Status peminjaman</span>
    </a>
</li>
