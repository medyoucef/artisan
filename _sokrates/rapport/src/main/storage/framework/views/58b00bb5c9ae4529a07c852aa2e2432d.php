<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Artisan indépendant</title>
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
            
            <?php echo $__env->make('layout.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            
            <?php echo $__env->make('layout.nav_bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Nav Bar End -->
            
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Liste des artisan</h2>
                        </div>
                        <div class="col-12">
                            <a href="">artisan</a>
                            <a href="">indépendant</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            
            

    <div class="team">
    <div class="container">
        <div class="section-header text-center">
            <p>Nos artisans</p>
            <h2>Choisissez l'artisan dont vous avez besoin</h2>
        </div>
        <div class="container mb-4">
    <form method="GET" id="search-form" class="row">
        <div class="col-md-5">
            <input type="text" name="profession" class="form-control" placeholder="Rechercher par métier (ex: électricien)">
        </div>
        <div class="col-md-5">
            <input type="text" name="ville" class="form-control" placeholder="Rechercher par ville (ex:Montréal)">
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-primary w-100">Rechercher</button>
        </div>
    </form>
</div>

<?php if(auth()->guard()->check()): ?>
<!-- Affichage des artisans si l'utilisateur est connecté -->
<div class="row" id="artisan-results">
    <?php $__currentLoopData = $artisans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artisan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-3 col-md-6">
            <div class="team-item">
                <div class="team-img">
                <img 
                src="<?php echo e(Str::startsWith($artisan->photo, 'photos/') ? asset('storage/' . $artisan->photo) : asset('img/' . $artisan->photo)); ?>" 
                alt="Photo Artisans" 
                style="width:100%; height:250px; object-fit:cover;">

                </div>
                <div class="team-text">
                    <h2><?php echo e($artisan->nom); ?></h2>
                    <p><?php echo e($artisan->profession); ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo e($artisan->ville); ?> - <?php echo e($artisan->adresse); ?></p>
                    <a href="<?php echo e(route('chat.start', $artisan->id)); ?>" 
   class="btn btn-primary"
   style="background:#030f27; color:white; padding:8px 15px; border-radius:6px; text-decoration:none; display:inline-block; margin-top:10px;">
    Contacter l'artisan
</a>

                </div>
                <div class="team-social">
                    <?php if($artisan->facebook): ?>
                        <a class="social-fb" href="<?php echo e($artisan->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if($artisan->instagram): ?>
                        <a class="social-in" href="<?php echo e($artisan->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                    <?php endif; ?>
                    <?php if($artisan->whatsapp): ?>
                        <a class="social-wa" href="https://wa.me/<?php echo e($artisan->whatsapp); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
<!-- Message pour les invités (non connectés) -->
<div class="alert alert-warning text-center w-100">
    <h4>⚠️ Veuillez vous connecter à notre plateforme pour afficher la liste des artisans.</h4>
    <a href="<?php echo e(route('auth')); ?>" class="btn btn-primary mt-3">Se connecter</a>
</div>
<?php endif; ?>


    </div>
</div>



            <!-- Footer Start -->
            
            <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
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

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
        <script>
    $(document).ready(function () {
        $('#search-form input').on('input', function () {
            let profession = $('input[name="profession"]').val();
            let ville = $('input[name="ville"]').val();

            $.ajax({
                url: "<?php echo e(route('artisans.search')); ?>",
                type: "GET",
                data: {
                    profession: profession,
                    ville: ville
                },
                success: function (response) {
                    $('#artisan-results').html(response.html);
                }
            });
        });
    });
</script>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\artisan\resources\views/front/art_ind.blade.php ENDPATH**/ ?>