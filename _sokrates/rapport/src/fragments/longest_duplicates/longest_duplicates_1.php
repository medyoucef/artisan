storage/framework/views/20edb2485ee3b02bee281f0cee523d82.php [1:236]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Khdamli</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="<?php echo e(asset('img/favicon.ico')); ?>" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link href="<?php echo e(asset('lib/flaticon/font/flaticon.css')); ?>" rel="stylesheet"> 
        <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/slick/slick.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/slick/slick-theme.css')); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <?php echo $__env->make('layout.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- Top Bar End -->
            
            <!-- Nav Bar Start -->
            
            <?php echo $__env->make('layout.nav_bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slide1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Travail soigné</p>
                            <h1 class="animated fadeInLeft">tu cherches un plombier !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Savoir-faire reconnu</p>
                            <h1 class="animated fadeInLeft">ou bien un menuiserie !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Service fiable</p>
                            <h1 class="animated fadeInLeft">ou un électricien !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide4.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Respect des délais</p>
                            <h1 class="animated fadeInLeft">un peintre !</h1>
                           
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide5.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Qualité garantie</p>
                            <h1 class="animated fadeInLeft">ou bien un maçon !</h1>
                            
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travailleur expert</h3>
                                    <p>Nous mettons notre expertise au service de vos projets pour garantir un travail de qualité, rapide et fiable</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travail de qualité</h3>
                                    <p>Chaque mission est réalisée avec soin, rigueur et souci du détail pour un résultat à la hauteur de vos attentes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>7/7 Support</h3>
                                    <p>Notre équipe est disponible tous les jours pour répondre à vos problèmes et vous accompagner sans interruption</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image" style="height: 500px;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Bienvenue chez Khdamlii</p>
                                <h2>Trouver un artisan facilement </h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Khdamlii est une plateforme 100% algérienne conçue pour mettre en relation les particuliers et les artisans qualifiés à travers toute l'Algérie. Que vous ayez besoin d’un plombier, d’un électricien, d’un menuisier ou tout autre professionnel du bâtiment ou des services, notre objectif est de vous aider à trouver rapidement et facilement l’artisan qu’il vous faut, près de chez vous.
                                </p>
                                <p>
                                    Nous croyons en la valeur du travail artisanal local, en la confiance et en la qualité du service rendu. Chaque artisan inscrit est soigneusement sélectionné pour vous garantir une expérience fiable, transparente et professionnelle.
                                </p>
                                <a class="btn" href="<?php echo e(route('artisan')); ?>">artisan indépendant</a>
                                <a class="btn" href="<?php echo e(route('company')); ?>">société des artisans</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">107</h2>
                                        <p>artisan indépendant</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">42</h2>
                                        <p>Société d'artisan</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">685</h2>
                                        <p>Clients satisfaits</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



storage/framework/views/3c27f935771fc83addd970332eedaf8f.php [1:236]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Khdamli</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="<?php echo e(asset('img/favicon.ico')); ?>" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

        <link href="<?php echo e(asset('lib/flaticon/font/flaticon.css')); ?>" rel="stylesheet"> 
        <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/lightbox/css/lightbox.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/slick/slick.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('lib/slick/slick-theme.css')); ?>" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <?php echo $__env->make('layout.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- Top Bar End -->
            
            <!-- Nav Bar Start -->
            
            <?php echo $__env->make('layout.nav_bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Nav Bar End -->


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slide1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Travail soigné</p>
                            <h1 class="animated fadeInLeft">tu cherches un plombier !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide2.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Savoir-faire reconnu</p>
                            <h1 class="animated fadeInLeft">ou bien un menuiserie !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide3.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Service fiable</p>
                            <h1 class="animated fadeInLeft">ou un électricien !</h1>
                            
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide4.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Respect des délais</p>
                            <h1 class="animated fadeInLeft">un peintre !</h1>
                           
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="img/slide5.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Qualité garantie</p>
                            <h1 class="animated fadeInLeft">ou bien un maçon !</h1>
                            
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travailleur expert</h3>
                                    <p>Nous mettons notre expertise au service de vos projets pour garantir un travail de qualité, rapide et fiable</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Travail de qualité</h3>
                                    <p>Chaque mission est réalisée avec soin, rigueur et souci du détail pour un résultat à la hauteur de vos attentes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>7/7 Support</h3>
                                    <p>Notre équipe est disponible tous les jours pour répondre à vos problèmes et vous accompagner sans interruption</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image" style="height: 500px;">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Bienvenue chez Khdamlii</p>
                                <h2>Trouver un artisan facilement </h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Khdamlii est une plateforme 100% algérienne conçue pour mettre en relation les particuliers et les artisans qualifiés à travers toute l'Algérie. Que vous ayez besoin d’un plombier, d’un électricien, d’un menuisier ou tout autre professionnel du bâtiment ou des services, notre objectif est de vous aider à trouver rapidement et facilement l’artisan qu’il vous faut, près de chez vous.
                                </p>
                                <p>
                                    Nous croyons en la valeur du travail artisanal local, en la confiance et en la qualité du service rendu. Chaque artisan inscrit est soigneusement sélectionné pour vous garantir une expérience fiable, transparente et professionnelle.
                                </p>
                                <a class="btn" href="<?php echo e(route('artisan')); ?>">artisan indépendant</a>
                                <a class="btn" href="<?php echo e(route('company')); ?>">société des artisans</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">107</h2>
                                        <p>artisan indépendant</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">42</h2>
                                        <p>Société d'artisan</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">685</h2>
                                        <p>Clients satisfaits</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



