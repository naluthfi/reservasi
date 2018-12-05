<li>
    <a href="{{ route('admin.dashboard.index') }}">
        <i class="fa fa-home"></i> <span>Dashboard admin</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.item.create') }}">
        <i class="fa fa-plus"></i> <span>Input data item baru</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.item.read') }}">
        <i class="fa fa-list"></i> <span>Daftar Item</span>
    </a>
</li>
{{--<li>--}}
{{--<a href="{{ route('admin.reservation.read', ['all' => true]) }}">--}}
{{--<i class="fa fa-calendar-o"></i> <span>Daftar semua peminjaman</span>--}}
{{--</a>--}}
{{--</li>--}}
<li>
    <a href="{{ route('admin.reservation.read', ['status' => 'pending']) }}">
        <i class="fa fa-calendar-o"></i> <span>Daftar peminjaman menunggu</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.reservation.read', ['type' => 'item']) }}">
        <i class="fa fa-calendar-o"></i> <span>Daftar peminjaman barang</span>
    </a>
</li>
<li>
    <a href="{{ route('admin.reservation.read', ['type' => 'class']) }}">
        <i class="fa fa-calendar-o"></i> <span>Daftar peminjaman kelas</span>
    </a>
</li>
