<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Left Side: Logo -->
        <a class="navbar-brand" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="30" height="30">
            MyWebsite
        </a>

        <!-- Right Side: User Icon, Notification Icon, Search Bar -->
        <div class="d-flex align-items-center">
            <!-- Search Bar -->
            <form class="d-flex me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <!-- Notification Icon -->
            <a href="#" class="nav-link">
                <i class="bi bi-bell"></i>
            </a>

            <!-- User Icon Dropdown -->
            <div class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li class="dropdown-item">{{ Auth::user()->name }}</li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Themes</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Log Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
