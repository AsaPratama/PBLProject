<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{url('home')}}">Warehouse Management</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{url('home')}}">Home</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown ">
                <a href="{{ url('home') }}" class=""><i class="fas fa-tachometer"></i><span>Dashboard</span></a>
            </li>

            <li class="nav-item dropdown ">
                <a href="{{ route('barang.index') }}" class=""><i class="fas fa-archive"></i><span>Data barang</span></a>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exchange"></i><span>Traffic Barang</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('barang_keluar.index') }}">Barang Keluar</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('barang_masuk.index') }}">Barang Masuk</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-exchange"></i><span>Log</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('log_keluar.index') }}">Log Barang Keluar</a>
                    </li>
                </ul>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('log_masuk.index') }}">Log Barang Masuk</a>
                    </li>
                </ul>
            </li>

            

            <li class="nav-item dropdown ">
                <a href="{{ route('note.index') }}"> <i class="fas fa-sticky-note"></i><span>Notes</span></a>
            </li>

    </aside>
</div>
