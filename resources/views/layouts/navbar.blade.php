<nav>
    <!-- Show nav-items only when logged in  -->
    @if (Auth::check())

    <div class="nav-items">
        <span class="nav-item">Product</span>
        <span class="nav-item">Sales</span>
    </div>
    @endif
    <!-- Show auth-items only when logged out  -->
    @if (Auth::guest())
    <div class="auth-items">
        <span class="auth-item">Login</span>
        <span class="auth-item">Register</span>
    </div>
    @endif

</nav>