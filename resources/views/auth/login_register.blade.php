<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registration Form</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background: url('{{ asset('img/slide1.jpg') }}') no-repeat center center fixed;
    background-size: cover;
  }
</style>

<body>
  <div class="wrapper">

    <!-- SIGN IN -->
    <div class="form-wrapper sign-in">
    <form id="login-form" action="{{ route('login.custom') }}" method="POST">

        @csrf
        <h2>Sign-in</h2>

        <div class="input-group">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>

        <div class="input-group">
          <input type="password" name="password" required>
          <label>Password</label>
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

    <!-- SIGN UP -->
    <div class="form-wrapper sign-up">
    <form id="register-form" action="{{ route('register.custom') }}" method="POST">

        @csrf
        <h2>Sign Up</h2>

        <!-- Username -->
        <div class="input-group">
          <input type="text" name="username" required>
          <label>Username</label>
        </div>

        <!-- Type user -->
        <div class="input-group">
          <select name="type_user" id="type_user" required>
            <option value="" disabled selected>Choose user type</option>
            <option value="client">Client</option>
            <option value="artisan">Artisan</option>
            <option value="societe_artisan">Société d'artisan</option>
          </select>
        </div>

        <!-- Email -->
        <div class="input-group">
          <input type="email" name="email" required>
          <label>Email</label>
        </div>

        <!-- Password -->
        <div class="input-group">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>

        <!-- CHAMPS ARTISAN (affichés seulement si type_user = artisan) -->
        <div id="artisan-fields" style="display:none; margin-top:20px;">

          <div class="input-group">
            <input type="text" name="profession">
            <label>Profession</label>
          </div>

          <div class="input-group">
            <input type="text" name="ville">
            <label>Ville</label>
          </div>

          
        </div>

        <div class="remember">
          <label><input type="checkbox" required> I agree to the terms & conditions</label>
        </div>

        <button type="submit">Sign Up</button>

        <div class="signUp-link">
          <p>Already have an account? <a href="#" class="signInBtn-link">Sign In</a></p>
        </div>
      </form>
    </div>

  </div>

  <script>
    // Afficher les champs artisan si type_user = artisan
    document.getElementById('type_user').addEventListener('change', function() {
      let artisanFields = document.getElementById('artisan-fields');
      artisanFields.style.display = (this.value === 'artisan') ? 'block' : 'none';
    });
  </script>

  <script src="{{ asset('js/script.js') }}"></script>

  @if(session('login_error'))
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Erreur de connexion',
      text: '{{ session('login_error') }}',
      confirmButtonColor: '#d33'
    });
  </script>
  @endif

</body>
</html>
