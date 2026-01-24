storage/framework/views/4d7b7cfe77140002739771f8c6c1cd8f.php [1:61]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration Form </title>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login.css')); ?>">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
  body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url('<?php echo e(asset('img/slide1.jpg')); ?>') no-repeat center center fixed;
  background-size: cover;
}
</style>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
    <form id="login-form" action="<?php echo e(route('login.custom')); ?>" method="POST">


      <?php echo csrf_field(); ?>
        <h2>Sign-in</h2>
        <div class="input-group">
        <input type="email" name="email" required>
        <label>Email</label>

        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
    <form id="register-form" action="<?php echo e(route('register.custom')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h2>Sign Up</h2>

    <div class="input-group">
        <input type="text" name="username" required>
        <label for="">Username</label>
    </div>

    <!-- Nouveau champ : type_user -->
    <div class="input-group">
        <select name="type_user" required>
            <option value="" disabled selected>Choose user type</option>
            <option value="client">Client</option>
            <option value="artisan">Artisan</option>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



storage/framework/views/8617c48f4ac7905ba1aecc9d9528d27a.php [1:61]:
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration Form </title>
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/login.css')); ?>">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<style>
  body {
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url('<?php echo e(asset('img/slide1.jpg')); ?>') no-repeat center center fixed;
  background-size: cover;
}
</style>
<body>
  <div class="wrapper">
    <div class="form-wrapper sign-in">
    <form id="login-form" action="<?php echo e(route('login.custom')); ?>" method="POST">


      <?php echo csrf_field(); ?>
        <h2>Sign-in</h2>
        <div class="input-group">
        <input type="email" name="email" required>
        <label>Email</label>

        </div>
        <div class="input-group">
          <input type="password" name="password" required>
          <label for="">Password</label>
        </div>
        <div class="remember">
          <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit">Login</button>
        <div class="signUp-link">
          <p>Don't have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
        </div>
      </form>
    </div>
    <div class="form-wrapper sign-up">
    <form id="register-form" action="<?php echo e(route('register.custom')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <h2>Sign Up</h2>

    <div class="input-group">
        <input type="text" name="username" required>
        <label for="">Username</label>
    </div>

    <!-- Nouveau champ : type_user -->
    <div class="input-group">
        <select name="type_user" required>
        <option value="" disabled selected>Choose user type</option>
        <option value="client">Client</option>
        <option value="artisan">Artisan</option>
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



