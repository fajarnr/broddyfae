<nav class="navbar navbar-light bg-transparent">
    <div class="container-fluid">
        <!-- Tombol hamburger -->
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu"
            aria-controls="offcanvasMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="d-flex align-items-center position-relative">
            <!-- Search -->
            <div class="search-container">
            <button class="btn btn-outline-success search-icon" type="button">
                <i class="bi bi-search"></i>
            </button>
            <input class="form-control search-input" type="search" placeholder="Search" aria-label="Search">
            </div>

            <!-- Login -->
            <a href="/login" class="btn btn-link login-icon">
                <i class="bi bi-pin-map"></i>
            </a>
        </div>
        
    </div>
</nav>

<!-- Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
    <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasMenuLabel">Broddyfae</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
        </li>
        <li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
    </ul>
    </div>
</div> 