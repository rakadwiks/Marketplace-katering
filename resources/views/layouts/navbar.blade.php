<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <h4>KATERING</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                        href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('belanja') ? 'active' : '' }}"
                        href="{{route('belanja')}}">Belanja</a>
                </li>
            </ul>
        </div>
        <div class="d-flex ms-1">
            <div class="profile flex-shrink-0">
                <a href="" class="btn btn-sm btn-outline"> Login</a>
            </div>
            <div class="profile flex-shrink-0 ms-1">
                <a href="" class="btn btn-sm btn-outline"> Register</a>
            </div>
            <div class="profile flex-shrink-0 ms-1">
                <div class="dropdown dropstart">
                    <a class="" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{asset('/img/content/2.jpg')}}" class="rounded-circle" width="32" height="32">

                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('admin-dashboard')}}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Keluar</a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</nav>