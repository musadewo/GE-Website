<nav class="navbar navbar-expand-lg bg-body-tertiary putih">
    <div class="container">
        <a class="navbar-brand text-white" href="/">
            <img src="https://upload.wikimedia.org/wikipedia/commons/b/b2/Bootstrap_logo.svg" alt="Bootstrap" width="30" height="24">
            Global Elektronik
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'menu-active' : '' }} " aria-current="page" href="/">Home</a>
            </li><li class="nav-item">
                <a class="nav-link {{ Request::is('service') ? 'menu-active' : '' }} " href="/service">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('about') ? 'menu-active' : '' }} " href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'menu-active' : '' }} " href="/contact">Contact</a>
            </li>
        </ul>
        <form class="d-flex">
            <a href="/login" class="btn btn-primary"><i class="fa-solid fa-user-shield"></i> Login</a>
        </form>
    </div>
</div>
</nav>
