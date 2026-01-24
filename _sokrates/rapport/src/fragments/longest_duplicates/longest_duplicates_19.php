storage/framework/views/1639945e2a31000c17c9cec339739cb6.php [97:180]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                </div>
                <div class="team-text">
                    <h2><?php echo e($artisan->nom); ?></h2>
                    <p><?php echo e($artisan->profession); ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo e($artisan->ville); ?> - <?php echo e($artisan->adresse); ?></p>
                    <p><i class="fas fa-phone-alt"></i> <?php echo e($artisan->telephone); ?></p>
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
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



storage/framework/views/719f5be912f0694a33aeeb86e195c21a.php [93:176]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
                </div>
                <div class="team-text">
                    <h2><?php echo e($artisan->nom); ?></h2>
                    <p><?php echo e($artisan->profession); ?></p>
                    <p><i class="fas fa-map-marker-alt"></i> <?php echo e($artisan->ville); ?> - <?php echo e($artisan->adresse); ?></p>
                    <p><i class="fas fa-phone-alt"></i> <?php echo e($artisan->telephone); ?></p>
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
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



