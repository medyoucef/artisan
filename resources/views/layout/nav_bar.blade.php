<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">À propos</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                    <a href="{{ route('artisan') }}" class="nav-item nav-link">Artisan</a>
                    <a href="{{ route('company') }}" class="nav-item nav-link">Entreprise</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

                    @auth
                        <a href="{{ route('profile') }}" class="nav-item nav-link">
                            <i class="fas fa-user-circle me-1"></i> Profile
                        </a>

                        <a href="#" class="nav-item nav-link"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endauth

                    @guest
                        <a href="{{ route('auth') }}" class="nav-item nav-link">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    @endguest
                </div>
            </div>
        </nav>
    </div>
</div>
