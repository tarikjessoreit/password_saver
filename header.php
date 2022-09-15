<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard - Password Saver</title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="dashboard.php">Password Saver</a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="dashboard.php">All Data</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="add-data.php">Add Data</a>
	        </li>
	      </ul>
	      <!-- user profile -->
	      <div class="dropdown ms-3">
			  <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
			  	<img src="assets/images/default-profile-avater.png" class="profile-avatar" alt="">
			    Mr. Jon
			  </button>
			  <ul class="dropdown-menu">
			    <li><a class="dropdown-item" href="#">Profile</a></li>
			    <li><a class="dropdown-item" href="#">Settings</a></li>
			    <li><a class="dropdown-item" href="#">Logout</a></li>
			  </ul>
			</div>
	    </div>
	  </div>
	</nav>
