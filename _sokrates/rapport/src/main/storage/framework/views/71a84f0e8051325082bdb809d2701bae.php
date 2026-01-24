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
    <link href="<?php echo e(asset('lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Top Bar -->
        <?php echo $__env->make('layout.topbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Navigation -->
        <?php echo $__env->make('layout.nav_bar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <!-- Page Header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Modifier le profil</h2>
                    </div>
                    <div class="col-12">
                        <a href="<?php echo e(route('home')); ?>">Accueil</a>
                        <a href="<?php echo e(route('profile')); ?>">Profil</a>
                        <a href="#">Modifier</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Formulaire de modification -->
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <div class="card shadow rounded-4">
                        <div class="card-body px-5 py-4">
                            <h4 class="mb-4 text-center">📝 Mise à jour des informations</h4>

                            <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <!-- Nom -->
    <div class="form-group">
        <label for="name">Nom complet</label>
        <input type="text" name="name" class="form-control" value="<?php echo e(old('name', $user->name)); ?>">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Email -->
    <div class="form-group mt-3">
        <label for="email">Adresse e-mail</label>
        <input type="email" name="email" class="form-control" value="<?php echo e(old('email', $user->email)); ?>">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Adresse -->
    <div class="form-group mt-3">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" class="form-control" value="<?php echo e(old('adresse', $user->adresse)); ?>">
        <?php $__errorArgs = ['adresse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Ville -->
    <div class="form-group mt-3">
        <label for="ville">Ville</label>
        <input type="text" name="ville" class="form-control" value="<?php echo e(old('ville', $user->ville)); ?>">
        <?php $__errorArgs = ['ville'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <!-- Photo de profil -->
    <div class="form-group mt-3">
        <label for="photo">Photo de profil</label><br>
        <?php if($user->photo): ?>
            <img src="<?php echo e(asset('storage/' . $user->photo)); ?>" alt="photo" width="100" class="mb-2 rounded">
        <?php endif; ?>
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

    <div class="mt-4 d-flex justify-content-between">
        <button type="submit" class="btn btn-success">💾 Enregistrer</button>
        <a href="<?php echo e(route('profile')); ?>" class="btn btn-secondary">⬅️ Annuler</a>
    </div>
</form>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\chercher_art\resources\views/front/profile_edit.blade.php ENDPATH**/ ?>