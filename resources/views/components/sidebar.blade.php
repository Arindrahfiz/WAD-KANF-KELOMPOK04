<aside class="sidebar">
    <div class="sidebar-brand">Inventaris</div>

    <div class="sidebar-user">
        {{ auth()->user()->name }}<br>
        <small>{{ auth()->user()->role }}</small>
    </div>

    <nav class="sidebar-menu">
        <a href="{{ route('vendors.index') }}"
           class="{{ request()->routeIs('vendors.index') ? 'aktif' : '' }}">
            Daftar Vendor
        </a>

        @if (auth()->user()->role === 'admin')
            <a href="{{ route('vendors.create') }}"
               class="{{ request()->routeIs('vendors.create') ? 'aktif' : '' }}">
                Tambah Vendor
            </a>
        @endif

        {{-- Menu modul lain tinggal ditambah di sini --}}
    </nav>

    <nav class="sidebar-menu">
        <a href="{{ route('vendors.index') }}"
           class="{{ request()->routeIs('vendors.index') ? 'aktif' : '' }}">
            Katalog
        </a>

    @if (auth()->user()->role === 'admin')
            <a href="{{ route('vendors.create') }}"
               class="{{ request()->routeIs('vendors.create') ? 'aktif' : '' }}">
                Katalog
            </a>
        @endif

    <nav class="sidebar-menu">
        <a href="{{ route('vendors.index') }}"
           class="{{ request()->routeIs('vendors.index') ? 'aktif' : '' }}">
            Zonasi dan rak barang
        </a>

    @if (auth()->user()->role === 'admin')
            <a href="{{ route('vendors.create') }}"
               class="{{ request()->routeIs('vendors.create') ? 'aktif' : '' }}">
                Zonasi dan rak barang
            </a>
        @endif


    <nav class="sidebar-menu">
        <a href="{{ route('vendors.index') }}"
           class="{{ request()->routeIs('vendors.index') ? 'aktif' : '' }}">
            Armada Operasional
        </a>
    
    @if (auth()->user()->role === 'admin')
            <a href="{{ route('vendors.create') }}"
               class="{{ request()->routeIs('vendors.create') ? 'aktif' : '' }}">
                Armada Operasional
            </a>
        @endif


    <form action="{{ route('logout') }}" method="POST" class="sidebar-logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</aside>