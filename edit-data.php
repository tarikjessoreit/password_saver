<?php include "header.php"; ?>

	<section class="main">
		<div class="container p-2">
			<h1>Edit Data</h1>
			<hr>

			<div class="row">
				<div class="col-6">
					<form action="" method="POST">
					  <div class="form-group mb-4">
					    <label for="datatitle">Title</label>
					    <input type="text" name="datatitle" class="form-control" id="datatitle" aria-describedby="emailHelp" placeholder="Enter Title">
					  </div>
					  <div class="form-group mb-4">
					    <label for="datausername">Username / Email</label>
					    <input type="text" name="datausername" class="form-control" id="datausername" aria-describedby="emailHelp" placeholder="Enter username / email">
					  </div>
					  <div class="form-group mb-4">
					    <label for="datapassword">Password</label>
					    <input type="password" name="datapass" class="form-control" id="datapassword" placeholder="Password">
					  </div>

					  <div class="form-group mb-4">
					    <label for="datanote">Note Here</label>
					    <textarea class="form-control" name="datanote" id="datanote" rows="3"></textarea>
					  </div>
					  <button type="submit" name="datasave" class="btn btn-primary px-4">Update Data</button>
					</form>
				</div>
			</div>


		</div>


		
	</section>

<?php include "footer.php"; ?>
	