<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login - Password Saver</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<section class="vh-100">
	  <div class="container py-5 h-100">
	    <div class="row d-flex align-items-center justify-content-center h-100">
	      <div class="col-md-8 col-lg-7 col-xl-6">
	        <img src="assets/images/login.svg"
	          class="img-fluid" alt="Phone image">
	      </div>
	      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
	        <form method="POST" action="dashboard.php">
	          <!-- Email input -->
	          <div class="form-outline mb-4">
	            <input type="email" id="form1Example13" class="form-control form-control-lg" />
	            <label class="form-label" for="form1Example13">Email address</label>
	          </div>

	          <!-- Password input -->
	          <div class="form-outline mb-4">
	            <input type="password" id="form1Example23" class="form-control form-control-lg" />
	            <label class="form-label" for="form1Example23">Password</label>
	          </div>

	          <div class="d-flex justify-content-around align-items-center mb-4">
	            <!-- Checkbox -->
	            <div class="form-check">
	              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
	              <label class="form-check-label" for="form1Example3"> Remember me </label>
	            </div>
	            <a href="#!">Forgot password?</a>
	          </div>

	          <!-- Submit button -->
	          <button type="submit" name="loginbtn" class="btn btn-primary btn-lg btn-block">Sign in</button>

	           <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="registration.php" role="button">
	            <i class="fab fa-facebook-f me-2"></i>Registration
	          </a>
	        </form>
	      </div>
	    </div>
	  </div>
	</section>



<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>