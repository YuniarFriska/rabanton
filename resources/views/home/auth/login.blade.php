<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body style="background-color: #f3f4f6; display: flex; align-items: center; justify-content: center; min-height: 100vh;">

  <div class="card shadow-lg rounded-3 overflow-hidden p-5" style="width: 100%; max-width: 400px; background-color: #ffffff;">

    <!-- Logo -->
    <div class="text-center mb-4">
      <img src="{{ asset('images/logoyufa.png') }}" alt="Yufa Logo" style="height: 50px;">
    </div>

    <!-- Form Login -->
    <form action="/login/do" method="POST">
      @csrf

      <h5 class="text-center mb-4 font-weight-bold">Login Administration</h5>

      <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="text" name="email" required>
      </div>

      <div class="form-group mt-3">
        <label>Password</label>
        <input class="form-control" type="password" name="password" required>
      </div>

      <div class="d-flex justify-content-between align-items-center mt-3">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember-me" id="remember">
          <label class="form-check-label" for="remember">
            Remember me
          </label>
        </div>
        <a href="#" class="text-muted small">Forgot Password?</a>
      </div>

      <button type="submit" class="btn btn-danger w-100 mt-4">Login</button>

      @if(session()->has('loginError'))
        <div class="alert alert-danger mt-3 text-center p-2">
          {{ session('loginError') }}
        </div>
      @endif
    </form>
  </div>

</body>

</html>
