storage/framework/views/20edb2485ee3b02bee281f0cee523d82.php [254:463]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            <div class="service-overlay">
                                <p><?php echo e($profession->description); ?></p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3><?php echo e($profession->name); ?></h3>
                            <a class="btn" href="<?php echo e(asset('img/' . $profession->photo)); ?>" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Video Start -->
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://youtu.be/x3QbwJzrQaU?si=7uulP-3aVgpvi957" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->

            <!-- FAQs Start -->
            <?php echo $__env->make('layout.question', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- FAQs End -->

            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="testimonial-slider-nav">
    <div class="slider-nav"><img src="<?php echo e(asset('img/1.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/4.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/2.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/6.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/3.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/5.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <!-- Artisan 1 -->
                    <div class="slider-item">
                        <h3>Mohamed Lounis</h3>
                        <h4>Électricien</h4>
                        <p>Grâce à cette plateforme, j’ai pu toucher plus de clients dans ma région. Les demandes sont sérieuses et régulières. Un vrai coup de boost pour mon activité.</p>
                    </div>
                    <!-- Artisan 2 -->
                    <div class="slider-item">
                        <h3>Yasmine Amrani</h3>
                        <h4>Décoratrice d’intérieur</h4>
                        <p>J’ai apprécié la simplicité d’inscription et la manière dont mon profil a été mis en avant. J’ai reçu plusieurs contacts dès les premières semaines.</p>
                    </div>
                    <!-- Artisan 3 -->
                    <div class="slider-item">
                        <h3>Ali Sebai</h3>
                        <h4>Plombier chauffagiste</h4>
                        <p>Enfin un site qui comprend les besoins des artisans ! Interface claire, clients réels, et un bon suivi. Je recommande les yeux fermés.</p>
                    </div>
                    <!-- Client 1 -->
                    <div class="slider-item">
                        <h3>Rania Djalal</h3>
                        <h4>Cliente - Peinture et déco</h4>
                        <p>J’ai trouvé un artisan très compétent en quelques clics. Travail propre, rapide, et exactement comme je l’espérais. Merci pour la mise en relation !</p>
                    </div>
                    <!-- Client 2 -->
                    <div class="slider-item">
                        <h3>Hakim Boulahbal</h3>
                        <h4>Client - Rénovation salle de bain</h4>
                        <p>Le site m’a permis de comparer plusieurs artisans et choisir celui qui me convenait le mieux. Le résultat est impeccable !</p>
                    </div>
                    <!-- Client 3 -->
                    <div class="slider-item">
                        <h3>Sabrina Mecheri</h3>
                        <h4>Cliente - Couture sur mesure</h4>
                        <p>Service pratique et sécurisé. J’ai été mise en contact avec une couturière exceptionnelle. Je suis très satisfaite du rendu final.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
            
<div class="container">
    <div class="section-header text-center">
        <p>Nos Collaborateurs</p>
        <h2>Artisans & Sociétés d'artisans</h2>
    </div>
    <?php if(auth()->guard()->check()): ?>
    <div class="row">
        <?php $__currentLoopData = $artisans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="<?php echo e(asset('img/' . $a->photo)); ?>" alt="Artisan" style="height: 250px; object-fit: cover;">
                </div>
                <div class="blog-title">
                    <h3><?php echo e($a->nom); ?></h3>
                    <a class="btn" href="https://wa.me/<?php echo e(preg_replace('/\D+/', '', $a->whatsapp)); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="blog-meta">
                    <p><strong>Métier:</strong> <?php echo e($a->profession); ?></p>
                    <p><strong>Ville:</strong> <?php echo e($a->ville); ?></p>
                </div>
                <div class="blog-text">
                    <p><strong>Adresse:</strong> <?php echo e($a->adresse); ?></p>
                    <p><strong>Téléphone:</strong> <?php echo e($a->telephone); ?></p>
                    <div>
                        <?php if($a->facebook): ?>
                            <a href="<?php echo e($a->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if($a->instagram): ?>
                            <a href="<?php echo e($a->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $societes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="<?php echo e(asset('img/' . $s->photo)); ?>" alt="Société" style="height: 250px; object-fit: cover;">
                </div>
                <div class="blog-title">
                    <h3><?php echo e($s->nom_societe); ?></h3>
                    <a class="btn" href="#"><i class="fas fa-building"></i></a>
                </div>
                <div class="blog-meta">
                    <p><strong>Ville:</strong> <?php echo e($s->ville); ?></p>
                </div>
                <div class="blog-text">
                    <p><strong>Adresse:</strong> <?php echo e($s->adresse); ?></p>
                    <p><strong>Téléphone:</strong> <?php echo e($s->telephone); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
<div class="text-center my-5">
    <h4>Veuillez vous connecter pour voir la liste des artisans et des sociétés.</h4>
    <a href="<?php echo e(route('auth')); ?>" class="btn btn-primary mt-3">Se connecter</a>
</div>
<?php endif; ?>


</div>

            <!-- Blog End -->


            <!-- Footer Start -->
            
            <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/isotope/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/lightbox/js/lightbox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/waypoints/waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/counterup/counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/slick/slick.min.js')); ?>"></script>

        <!-- Template Javascript -->
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



storage/framework/views/3c27f935771fc83addd970332eedaf8f.php [254:463]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                            <div class="service-overlay">
                                <p><?php echo e($profession->description); ?></p>
                            </div>
                        </div>
                        <div class="service-text">
                            <h3><?php echo e($profession->name); ?></h3>
                            <a class="btn" href="<?php echo e(asset('img/' . $profession->photo)); ?>" data-lightbox="service">+</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
                </div>
            </div>
            <!-- Service End -->


            <!-- Video Start -->
            <div class="video wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://youtu.be/x3QbwJzrQaU?si=7uulP-3aVgpvi957" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>        
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video End -->

            <!-- FAQs Start -->
            <?php echo $__env->make('layout.question', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <!-- FAQs End -->

            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="testimonial-slider-nav">
    <div class="slider-nav"><img src="<?php echo e(asset('img/1.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/4.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/2.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/6.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/3.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
    <div class="slider-nav"><img src="<?php echo e(asset('img/5.jpeg')); ?>" alt="Testimonial" class="rounded-circle"></div>
</div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-slider">
                    <!-- Artisan 1 -->
                    <div class="slider-item">
                        <h3>Mohamed Lounis</h3>
                        <h4>Électricien</h4>
                        <p>Grâce à cette plateforme, j’ai pu toucher plus de clients dans ma région. Les demandes sont sérieuses et régulières. Un vrai coup de boost pour mon activité.</p>
                    </div>
                    <!-- Artisan 2 -->
                    <div class="slider-item">
                        <h3>Yasmine Amrani</h3>
                        <h4>Décoratrice d’intérieur</h4>
                        <p>J’ai apprécié la simplicité d’inscription et la manière dont mon profil a été mis en avant. J’ai reçu plusieurs contacts dès les premières semaines.</p>
                    </div>
                    <!-- Artisan 3 -->
                    <div class="slider-item">
                        <h3>Ali Sebai</h3>
                        <h4>Plombier chauffagiste</h4>
                        <p>Enfin un site qui comprend les besoins des artisans ! Interface claire, clients réels, et un bon suivi. Je recommande les yeux fermés.</p>
                    </div>
                    <!-- Client 1 -->
                    <div class="slider-item">
                        <h3>Rania Djalal</h3>
                        <h4>Cliente - Peinture et déco</h4>
                        <p>J’ai trouvé un artisan très compétent en quelques clics. Travail propre, rapide, et exactement comme je l’espérais. Merci pour la mise en relation !</p>
                    </div>
                    <!-- Client 2 -->
                    <div class="slider-item">
                        <h3>Hakim Boulahbal</h3>
                        <h4>Client - Rénovation salle de bain</h4>
                        <p>Le site m’a permis de comparer plusieurs artisans et choisir celui qui me convenait le mieux. Le résultat est impeccable !</p>
                    </div>
                    <!-- Client 3 -->
                    <div class="slider-item">
                        <h3>Sabrina Mecheri</h3>
                        <h4>Cliente - Couture sur mesure</h4>
                        <p>Service pratique et sécurisé. J’ai été mise en contact avec une couturière exceptionnelle. Je suis très satisfaite du rendu final.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <!-- Testimonial End -->


            <!-- Blog Start -->
            <div class="blog">
            
<div class="container">
    <div class="section-header text-center">
        <p>Nos Collaborateurs</p>
        <h2>Artisans & Sociétés d'artisans</h2>
    </div>
    <?php if(auth()->guard()->check()): ?>
    <div class="row">
        <?php $__currentLoopData = $artisans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="<?php echo e(asset('img/' . $a->photo)); ?>" alt="Artisan" style="height: 250px; object-fit: cover;">
                </div>
                <div class="blog-title">
                    <h3><?php echo e($a->nom); ?></h3>
                    <a class="btn" href="https://wa.me/<?php echo e(preg_replace('/\D+/', '', $a->whatsapp)); ?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                </div>
                <div class="blog-meta">
                    <p><strong>Métier:</strong> <?php echo e($a->profession); ?></p>
                    <p><strong>Ville:</strong> <?php echo e($a->ville); ?></p>
                </div>
                <div class="blog-text">
                    <p><strong>Adresse:</strong> <?php echo e($a->adresse); ?></p>
                    <p><strong>Téléphone:</strong> <?php echo e($a->telephone); ?></p>
                    <div>
                        <?php if($a->facebook): ?>
                            <a href="<?php echo e($a->facebook); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <?php endif; ?>
                        <?php if($a->instagram): ?>
                            <a href="<?php echo e($a->instagram); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php $__currentLoopData = $societes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 wow fadeInUp">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="<?php echo e(asset('img/' . $s->photo)); ?>" alt="Société" style="height: 250px; object-fit: cover;">
                </div>
                <div class="blog-title">
                    <h3><?php echo e($s->nom_societe); ?></h3>
                    <a class="btn" href="#"><i class="fas fa-building"></i></a>
                </div>
                <div class="blog-meta">
                    <p><strong>Ville:</strong> <?php echo e($s->ville); ?></p>
                </div>
                <div class="blog-text">
                    <p><strong>Adresse:</strong> <?php echo e($s->adresse); ?></p>
                    <p><strong>Téléphone:</strong> <?php echo e($s->telephone); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php endif; ?>

<?php if(auth()->guard()->guest()): ?>
<div class="text-center my-5">
    <h4>Veuillez vous connecter pour voir la liste des artisans et des sociétés.</h4>
    <a href="<?php echo e(route('auth')); ?>" class="btn btn-primary mt-3">Se connecter</a>
</div>
<?php endif; ?>


</div>

            <!-- Blog End -->


            <!-- Footer Start -->
            
            <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo e(asset('lib/easing/easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/owlcarousel/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/isotope/isotope.pkgd.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/lightbox/js/lightbox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/waypoints/waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/counterup/counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('lib/slick/slick.min.js')); ?>"></script>

        <!-- Template Javascript -->
        <script src="<?php echo e(asset('js/main.js')); ?>"></script>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



