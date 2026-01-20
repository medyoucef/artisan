<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Modifier le profil</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Fonts & CSS Libraries -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Top Bar -->
        @include('layout.topbar')

        <!-- Navigation -->
        @include('layout.nav_bar')

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Modifier le profil</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Accueil</a>
                        <a href="{{ route('profile') }}">Profil</a>
                        <a href="#">Modifier</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de modification -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="card shadow rounded-4">
                        <div class="card-body px-5 py-4">
                            <h4 class="mb-4 text-center">📝 Mise à jour des informations</h4>

                            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Nom -->
    <div class="form-group">
        <label for="name">Nom complet</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- Email -->
    <div class="form-group mt-3">
        <label for="email">Adresse e-mail</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- Adresse -->
    <div class="form-group mt-3">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="form-control" value="{{ old('adresse', $user->adresse) }}">
        @error('adresse') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- Ville -->
    <div class="form-group mt-3">
        <label for="ville">Ville</label>
        <input type="text" name="ville" class="form-control" value="{{ old('ville', $user->ville) }}">
        @error('ville') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- Photo de profil -->
    <div class="form-group mt-3">
        <label for="photo">Photo de profil</label><br>
        @if($user->photo)
            <img src="{{ asset('storage/' . $user->photo) }}" alt="photo" width="100" class="mb-2 rounded">
        @endif
        <input type="file" name="photo" class="form-control-file">
        @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <div class="mt-4 d-flex justify-content-between">
        <button type="submit" class="btn btn-success">💾 Enregistrer</button>
        <a href="{{ route('profile') }}" class="btn btn-secondary">⬅️ Annuler</a>
    </div>
</form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layout.footer')

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
