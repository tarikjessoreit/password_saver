<?php include "config.php"; ?>
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

	<?php 
	if (isset($_SESSION["UID"]) && isset($_SESSION["logstatus"])) {
		header('location:dashboard.php');
	}

	$msg="";
	$err="";
	if (isset($_POST['loginbtn'])) {
		$username =  $_POST['uusername'];
		$password =  $_POST['upass'];

		$sql = "SELECT * FROM ".TBL_USER." WHERE (user_username  ='$username' OR user_email = '$username') AND user_password = '$password'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()){ 
				$msg="Login Successfull";
				$_SESSION["fullname"] = $row['user_fullname'];
				$_SESSION["UID"] = $row['ID'];
				$_SESSION["logstatus"] = true;
				header('refresh:2;url=dashboard.php');

			}
		}else{
			$err="Login Faild Please Try Again";
		}
	}
	?> 

	<section class="vh-100">
	  <div class="container py-5 h-100">
	    <div class="row d-flex align-items-center justify-content-center h-100">
	      <div class="col-md-8 col-lg-7 col-xl-6">
	        <img src="assets/images/login.svg"
	          class="img-fluid" alt="Phone image">
	      </div>
	      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
	      	<?php if(!empty($msg)){ ?>
			<div class="alert alert-success"><?php echo $msg; ?></div>
			<?php } ?>
			<?php if(!empty($err)){ ?>
			<div class="alert alert-danger"><?php echo $err; ?></div>
			<?php } ?>
	        <form method="POST" action="">
	          <!-- Email input -->
	          <div class="form-outline mb-4">
	            <input type="text" name="uusername" id="uusername" class="form-control form-control-lg" />
	            <label class="form-label" for="uusername">Email / Username</label>
	          </div>

	          <!-- Password input -->
	          <div class="form-outline mb-4">
	            <input type="password" name="upass" id="upass" class="form-control form-control-lg" />
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