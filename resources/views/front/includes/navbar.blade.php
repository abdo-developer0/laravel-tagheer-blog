<nav class="navbar navbar-expand-lg bg-secondary navbar-dark fixed-top d-block" style="height: 10vh;">

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a href="{{ route('home') }}" class="navbar-brand d-lg-none">{{ $settings->site_name }}</a>
    
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav m-auto">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('blog') }}" class="nav-item nav-link">Blog</a>
            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            @auth
                @can('admin')
                    <a href="{{ route('dashbord') }}" class="nav-item nav-link">Dashbord</a>
                @endcan
                <a href="{{ route('logout') }}" class="nav-item nav-link">Logout</a>  
            @else
                <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            @endauth
        </div>
    </div>
</nav>
<!-- Navbar End -->