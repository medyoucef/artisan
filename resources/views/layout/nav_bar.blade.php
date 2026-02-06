<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">
                <div class="navbar-nav">

                    <!-- Liens publics -->
                    <a href="{{ route('home') }}" class="nav-item nav-link active">Accueil</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link">À propos</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                    <a href="{{ route('artisan') }}" class="nav-item nav-link">Artisan</a>
                    <a href="{{ route('company') }}" class="nav-item nav-link">Entreprise</a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>

                    @auth
                        <!-- Vérifier si l'utilisateur est un artisan -->
                        @php
                            $isArtisan = \App\Models\Artisan::where('user_id', auth()->id())->exists();
                        @endphp

                        @if($isArtisan)
                            <a href="{{ route('messages.inbox') }}" class="nav-item nav-link">
                                <i class="fas fa-envelope me-1"></i> Messages
                            </a>
                        @endif

                        <!-- Vérifier si l'utilisateur est un client -->
                        @if(auth()->user()->type_user === 'client')
                        @php
    $pendingDevis = \App\Models\Devis::where('client_id', auth()->id())
                         ->where('statut', 'en_attente')
                         ->count();
@endphp


    <a href="{{ route('client.devis') }}" class="nav-item nav-link">
        <i class="fas fa-file-invoice-dollar me-1"></i>
        Devis 
        @if($pendingDevis > 0)
            <span style="
                background:#fdbe33;
                color:#030f27;
                padding:2px 6px;
                border-radius:10px;
                font-weight:bold;
                margin-left:4px;
            ">
                {{ $pendingDevis }}
            </span>
        @endif
    </a>
@endif


                        <!-- Profil -->
                        <a href="{{ route('profile') }}" class="nav-item nav-link">
                            <i class="fas fa-user-circle me-1"></i> Profile
                        </a>

                        <!-- Déconnexion -->
                        <a href="#" class="nav-item nav-link"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endauth

                    @guest
                        <!-- Login -->
                        <a href="{{ route('auth') }}" class="nav-item nav-link">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                    @endguest

                </div>
            </div>
        </nav>
    </div>
</div>
