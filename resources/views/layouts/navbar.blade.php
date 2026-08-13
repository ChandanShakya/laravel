<nav>
    <!-- Show nav-items only when logged in  -->
    @if (Auth::check())
    <div class="nav-items">
        <a class="nav-item" href="{{ route('product.index') }}">Products</a>
        <a class="nav-item" href="{{ route('sale.index') }}">Sales</a>
        <a class="nav-item" href="{{ route('sale.create') }}">New Sale</a>
    </div>
    <div class="auth-items">
        <form action="{{ route('logOut.post') }}" method="post" style="display:inline">
            @csrf
            <button type="submit" class="auth-item">Logout</button>
        </form>
    </div>
    @endif
    <!-- Show auth-items only when logged out  -->
    @if (Auth::guest())
    <div class="auth-items">
        <a class="auth-item" href="{{ route('login') }}">Login</a>
        <a class="auth-item" href="{{ route('register') }}">Register</a>
    </div>
    @endif
</nav>