<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration - Password Saver</title>
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
		if (isset($_POST['regbtn'])) {
			$user_join_datetime =  date("Y-m-d H:i:s");
			$user_fullname =  $_POST['ufullname'];
			$user_username =  $_POST['uusername'];
			$user_password =  $_POST['upassword'];
			$user_email =  $_POST['uemail'];
			$user_status =  'active';

			$sql = "INSERT INTO ".TBL_USER."(user_join_datetime, user_fullname, user_username, user_password, user_email, user_status) VALUES ('$user_join_datetime','$user_fullname', '$user_username', '$user_password', '$user_email', '$user_status')";

			if($conn->query($sql)){
				$msg = "Registration Successfull!";
			}else{
				$err="Registration Faild: ".$conn->error;
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
	          <!-- Name input -->
	          <div class="form-outline mb-2">
	            <input type="text" name="ufullname" id="ufullname" class="form-control form-control-lg" />
	            <label class="form-label" for="ufullname">Full Name</label>
	          </div>
	          <!-- Email input -->
	          <div class="form-outline mb-2">
	            <input type="email" name="uemail" id="uemail" class="form-control form-control-lg" />
	            <label class="form-label" for="userEmailAddress">Email address</label>
	          </div>
	          <!-- Username input -->
	          <div class="form-outline mb-2">
	            <input type="text" name="uusername" id="uusername" class="form-control form-control-lg" />
	            <label class="form-label" for="userEmailAddress">UserName</label>
	          </div>

	          <!-- Password input -->
	          <div class="form-outline mb-2">
	            <input type="password" name="upassword" id="upassword" class="form-control form-control-lg" />
	            <label class="form-label" for="upassword">Password</label>
	          </div>

	          <!-- confirm Password input -->
	          <div class="form-outline mb-2">
	            <input type="password" name="uconfpassword" id="uconfpassword" class="form-control form-control-lg" />
	            <label class="form-label" for="uconfpassword">Confirm Password</label>
	          </div>

	          <div class="d-flex justify-content-around align-items-center mb-2">
	            <!-- Checkbox -->
	            <div class="form-check">
	              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
	              <label class="form-check-label" for="form1Example3"> Remember me </label>
	            </div>
	            <a href="#!">Forgot password?</a>
	          </div>

	          <!-- Submit button -->
	          <button type="submit" name="regbtn" value="ok" class="btn btn-primary btn-lg btn-block regbtn">Sign Up</button>
	           <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="index.php" role="button">
	            <i class="fab fa-facebook-f me-2"></i>Login
	          </a>
	        </form>
	      </div>
	    </div>
	  </div>
	</section>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
</body>
</html>