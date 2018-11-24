<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","haystack","Haystack1!","haystack");
	$result = mysqli_query($conn,"SELECT * FROM users WHERE username='" . $_POST["inputEmail"] . "' and password = '". $_POST["inputPassword"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid email address or password.";
	} else {
		$message = "";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="796325909617-kh08o4a9o04gc5i1tkvmudgvheq1esj7.apps.googleusercontent.com">
    <link rel="icon" href="icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>For Students | Haystack</title>
</head>
<body class="bg-light">
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block text-light" href="index.html"><img src="logo.png" alt="HAYSTACK" width="180" height="26"></a>
            <a class="py-2 d-none d-md-inline-block text-light" href="researcher.html">For Researchers</a>
            <a class="py-2 d-none d-md-inline-block text-light" href="student.html">For Students</a>
            <a class="py-2 d-none d-md-inline-block text-light" href="login.html">Login</a>
            <a class="py-2 d-none d-md-inline-block btn btn-dark" href="signup.html">Sign Up</a>
        </div>
    </nav>
    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <form class="form-signin" method="post" action="">
              <div class="form-label-group">
                <input type="email" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">Email address</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <div class="text-danger"><?php if($message!="") { echo $message; } ?></div>
              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" name="rememberPass">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              <button name="submit" class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
              <a class="btn btn-lg btn-dark btn-block" href="signup.html">Sign Up</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block" type="submit"><i class="fab fa-google mr-2"></i> Log in with Google</button>
              <button class="btn btn-lg btn-linkedin btn-block" type="submit"><i class="fab fa-linkedin-f mr-2"></i> Log in with LinkedIn</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</footer>
</body>
</html>
