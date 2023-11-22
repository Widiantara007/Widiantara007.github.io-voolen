<!-- Navbar Start -->
<div class="container-fluid bg-dark sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-light py-2 py-lg-0">
            <a href="index.html" class="navbar-brand">
                <img class="img-fluid" src="img/logo.png" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('index') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }} ">Home</a>
                    <a href="{{ route('about') }}"class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                    <a href="{{ route('activities') }}"class="nav-item nav-link {{ Request::is('activities') ? 'active' : '' }}">Activities</a>
                    <a href="{{ route('goods') }}"class="nav-item nav-link {{ Request::is('goods') ? 'active' : '' }}">Goods</a>
                    <a href="{{ route('contact') }}"class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="border-start ps-4 d-none d-lg-block">
                    <button type="button" class="btn btn-sm p-0 text-white"><i class="btn-search fa fa-search"></i></button>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->