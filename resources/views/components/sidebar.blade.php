<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Pancarekenan</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ str_contains(Route::currentRouteName(), 'user') ? 'active' : '' }}">
                <a href="
                {{ route('user.index') }}
                " class="nav-link"><i
                        class="fa-solid fa-users"></i>
                    <span>Pengguna</span></a>
            </li>
            <li class="{{ str_contains(Route::currentRouteName(), 'category') ? 'active' : '' }}">
                <a href="
                {{ route('category.index') }}
                " class="nav-link"><i
                        class="fa-solid fa-list"></i>
                    <span>Kategori</span></a>
            </li>
            <li class="{{ str_contains(Route::currentRouteName(), 'product') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('product.index') }}"><i class="fa-solid fa-shop"></i><span>Produk
                    </span></a>
            </li>
    </aside>
    <script>
        window.setTimeout(function() {
            $('.alert').fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
</div>
