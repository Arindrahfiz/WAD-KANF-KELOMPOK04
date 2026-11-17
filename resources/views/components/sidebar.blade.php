<aside class="sidebar">
    <div class="sidebar-brand">Inventaris</div>

    <div class="sidebar-user">
        {{ auth()->user()->name }}<br>
        <small>{{ auth()->user()->role }}</small>
    </div>

    <nav class="sidebar-menu">
        <a href="{{ route('vendors.index') }}"
           class="{{ request()->routeIs('vendors.*') ? 'aktif' : '' }}">
            Vendor
        </a>

        <a href="{{ route('katalog.index') }}"
           class="{{ request()->routeIs('katalog.*') ? 'aktif' : '' }}">
            Katalog
        </a>

        <a href="{{ route('zonasi.index') }}"
           class="{{ request()->routeIs('zonasi.*') ? 'aktif' : '' }}">
            Zonasi dan rak barang
        </a>

        <a href="{{ route('armada.index') }}"
           class="{{ request()->routeIs('armada.*') ? 'aktif' : '' }}">
            Armada Operasional
        </a>
    </nav>

    <form action="{{ route('logout') }}" method="POST" class="sidebar-logout">
        @csrf
        <button type="submit">Logout</button>
    </form>
</aside>