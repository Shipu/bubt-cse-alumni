<nav class="navbar navbar-reverse navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand smooth" href="">BUBT CSE ALUMNI</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ml-lg-3 align-items-lg-center">
                <li class="nav-item"><a href="#mission" class="nav-link">Mission</a></li>
                <li class="nav-item"><a href="#vision" class="nav-link">Vision</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#members" class="nav-link">Members</a></li>
                <li class="nav-item d-lg-none d-md-block"><a href="{{ backpack_url('login') }}" class="nav-link smooth"
                                                             target="_blank">Login</a></li>
            </ul>
            <ul class="navbar-nav ml-auto align-items-lg-center d-none d-lg-block">
                <li class="ml-lg-3 nav-item">
                    <a href="{{ backpack_url('login') }}" class="btn btn-round smooth btn-icon icon-left"
                       target="_blank">
                        <i class="fas fa-sign-in-alt"></i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>