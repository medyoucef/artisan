<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>entreprise d'artisans</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet"> 
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            
            @include('layout.topbar')
            
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            
            @include('layout.nav_bar')
            
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Les entreprises d'artisans</h2>
                        </div>
                        <div class="col-12">
                            <a href="">entreprise</a>
                            <a href="">artisans</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            
            

    <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Les entreprises qui traitent avec nous</p>
            <h2>Choisissez l'entreprise que vous souhaitez</h2>
        </div>
        <div class="container mb-4">
    <form method="GET" class="row" id="searchSocieteForm">
        
        <div class="col-md-5">
            <input type="text" name="adresse" class="form-control" placeholder="Rechercher par ville (ex: Montréal)">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Rechercher</button>
        </div>
    </form>
</div>


@auth
<!-- Affichage des sociétés si l'utilisateur est connecté -->
<div class="row" id="societeResults">
    @foreach ($societes as $societe)
        <div class="col-lg-3 col-md-6">
            <div class="team-item">
                <div class="team-img">
                    <img 
                        src="{{ Str::startsWith($societe->photo, 'photos/') ? asset('storage/' . $societe->photo) : asset('img/' . $societe->photo) }}" 
                        alt="Photo Société" 
                        style="width:100%; height:250px; object-fit:cover;">
                </div>
                    <div class="team-text">
                        <h2>{{ $societe->name }}</h2>
                        <p><i class="fas fa-map-marker-alt"></i>  {{ $societe->adresse }}</p>
                        <p><i class="fab fa-whatsapp"></i>
                            <a href="https://wa.me/{{ preg_replace('/\D+/', '', $societe->telephone) }}" target="_blank">
                                {{ $societe->telephone }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endauth


@guest
    <div class="alert alert-warning w-100 text-center">
        Vous devez <a href="{{ route('auth') }}">vous connecter</a> pour voir les entreprises d'artisans.
    </div>
@endguest


</div>

</div>
            


           <!-- Footer Start -->
           
            @include('layout.footer')
            
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        
        <script src="js/main.js"></script>
        <script>
$(document).ready(function() {
    $('#searchSocieteForm input').on('keyup', function() {
        var formData = $('#searchSocieteForm').serialize();

        $.ajax({
            url: "{{ route('societes.search') }}",
            method: "GET",
            data: formData,
            success: function(response) {
                $('#societeResults').html(response.html);
            },
            error: function(xhr) {
                console.error('Erreur AJAX:', xhr.responseText);
            }
        });
    });

    $('#searchSocieteForm').on('submit', function(e) {
        e.preventDefault();
    });
});
</script>


    </body>
</html>
