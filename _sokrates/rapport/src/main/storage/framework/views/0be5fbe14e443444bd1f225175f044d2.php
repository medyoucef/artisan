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
    <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <!-- Top Bar -->
        <?php echo $__env->make('layout.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Nav Bar -->
        <?php echo $__env->make('layout.nav_bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Profil de l'utilisateur</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(route('home')); ?>">Accueil</a>
                        <a href="#">Profil</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Profile Section -->
        <div class="container py-5">
    <h2 class="mb-4">👤 Mon profil</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-4 text-center">
            <?php if($user->photo): ?>
                <img src="<?php echo e(asset('storage/' . $user->photo)); ?>" alt="Photo de profil" class="img-fluid rounded-circle mb-3" width="200" height="200">
            <?php else: ?>
                <img src="<?php echo e(asset('img/default-profile.png')); ?>" alt="Photo de profil par défaut" class="img-fluid rounded-circle mb-3" width="200" height="200">
            <?php endif; ?>
        </div>

        <div class="col-md-8">
            <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="form-group mb-3">
                    <label for="name">Nom complet</label>
                    <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group mb-3">
                    <label for="email">Adresse e-mail</label>
                    <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>">
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group mb-3">
                    <label for="type_user">Type d'utilisateur</label>
                    <input type="text" name="type_user" class="form-control" value="<?php echo e($user->type_user); ?>" readonly>
                </div>


                <div class="form-group mb-3">
                    <label for="adresse">Adresse</label>
                    <input type="text" name="adresse" class="form-control" value="<?php echo e($user->adresse); ?>">
                    <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group mb-3">
                    <label for="ville">Ville</label>
                    <input type="text" name="ville" class="form-control" value="<?php echo e($user->ville); ?>">
                    <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group mb-3">
                    <label for="telephone">Téléphone</label>
                    <input type="text" name="telephone" class="form-control" value="<?php echo e($user->telephone); ?>">
                    <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                

                <div class="form-group mb-4">
                    <label for="photo">Changer la photo de profil</label>
                    <input type="file" name="photo" class="form-control-file">
                    <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="btn btn-success">💾 Enregistrer les modifications</button>
                <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">⬅️ Retour</a>
            </form>
            <?php if($user->type_user === 'artisan'): ?>
    <?php
        $artisan = \App\Models\Artisan::where('nom', $user->name)->first();
    ?>
    <?php if($user->photo): ?>
    <img src="<?php echo e(asset('storage/' . $user->photo)); ?>" alt="Photo de profil" style="width:150px; height:150px;">
<?php else: ?>
    <p>Aucune photo de profil pour le moment.</p>
<?php endif; ?>

    <?php if(!$artisan): ?>
        <form action="<?php echo e(route('artisan.rejoindre')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group mb-3">
                <label for="profession">Votre métier</label>
                <input type="text" name="profession" class="form-control" required>
                <?php $__errorArgs = ['profession'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn btn-primary">🛠️ Rejoindre les artisans</button>
        </form>
    <?php else: ?>
        <div class="form-group mb-3">
            <label for="profession">Métier</label>
            <input type="text" class="form-control" value="<?php echo e($artisan->profession); ?>" readonly>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if($user->type_user === 'societe_artisan'): ?>
    <?php
        $infosOk = $user->ville && $user->adresse && $user->photo && $user->telephone;
        $dejaRejoint = \App\Models\SocieteArtisan::where('nom_societe', $user->name)->exists();
    ?>

    <?php if(!$dejaRejoint): ?>
        <?php if($infosOk): ?>
            <form action="<?php echo e(route('societe.rejoindre')); ?>" method="POST" class="mt-3">
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-primary">🏢 Rejoindre les sociétés d’artisans</button>
            </form>
        <?php else: ?>
            <div class="alert alert-warning mt-3">
                Veuillez compléter votre profil (adresse, ville, téléphone et photo) pour rejoindre les sociétés.
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="alert alert-info mt-3">
            ✅ Vous êtes déjà inscrit comme société artisan.
        </div>
    <?php endif; ?>
<?php endif; ?>

        </div>
    </div>
</div>

        

        <!-- Footer -->
        <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
   
    </div>
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\chercher_art\resources\views/front/profile.blade.php ENDPATH**/ ?>