<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Profil utilisateur</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <!-- Top Bar -->
        @include('layout.topbar')

        <!-- Nav Bar -->
        @include('layout.nav_bar')

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Profil de l'utilisateur</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Accueil</a>
                        <a href="#">Profil</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="container py-5">
    <h2 class="mb-4">👤 Mon profil</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-md-4 text-center">
            @if($user->photo)
                <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo de profil" class="img-fluid rounded-circle mb-3" width="200" height="200">
            @else
                <img src="{{ asset('img/default-profile.png') }}" alt="Photo de profil par défaut" class="img-fluid rounded-circle mb-3" width="200" height="200">
            @endif
        </div>

        <div class="col-md-8">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group mb-3">
                    <label for="name">Nom complet</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="type_user">Type d'utilisateur</label>
                    <input type="text" name="type_user" class="form-control" value="{{ $user->type_user }}" readonly>
                </div>


                <div class="form-group mb-3">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" value="{{ $user->adresse }}">
                    @error('adresse') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" value="{{ $user->ville }}">
                    @error('ville') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group mb-3">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" value="{{ $user->telephone }}">
                    @error('telephone') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                

                <div class="form-group mb-4">
                    <label for="photo">Changer la photo de profil</label>
                    <input type="file" name="photo" class="form-control-file">
                    @error('photo') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-success">💾 Enregistrer les modifications</button>
                <a href="{{ route('home') }}" class="btn btn-secondary">⬅️ Retour</a>
            </form>
            @if($user->type_user === 'artisan')
    @php
        $artisan = \App\Models\Artisan::where('nom', $user->name)->first();
    @endphp
    @if ($user->photo)
    <img src="{{ asset('storage/' . $user->photo) }}" alt="Photo de profil" style="width:150px; height:150px;">
@else
    <p>Aucune photo de profil pour le moment.</p>
@endif

    @if(!$artisan)
        <form action="{{ route('artisan.rejoindre') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="profession">Votre métier</label>
                <input type="text" name="profession" class="form-control" required>
                @error('profession') <small class="text-danger"></small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">🛠️ Rejoindre les artisans</button>
        </form>
    @else
        <div class="form-group mb-3">
            <label for="profession">Métier</label>
            <input type="text" class="form-control" value="{{ $artisan->profession }}" readonly>
        </div>
    @endif
@endif

@if($user->type_user === 'societe_artisan')
    @php
        $infosOk = $user->ville && $user->adresse && $user->photo && $user->telephone;
        $dejaRejoint = \App\Models\SocieteArtisan::where('nom_societe', $user->name)->exists();
    @endphp

    @if(!$dejaRejoint)
        @if($infosOk)
            <form action="{{ route('societe.rejoindre') }}" method="POST" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary">🏢 Rejoindre les sociétés d’artisans</button>
            </form>
        @else
            <div class="alert alert-warning mt-3">
                Veuillez compléter votre profil (adresse, ville, téléphone et photo) pour rejoindre les sociétés.
            </div>
        @endif
    @else
        <div class="alert alert-info mt-3">
            ✅ Vous êtes déjà inscrit comme société artisan.
        </div>
    @endif
@endif

        </div>
    </div>
</div>

        

        <!-- Footer -->
        @include('layout.footer')

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
   
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
