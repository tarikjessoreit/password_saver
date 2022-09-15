<?php include "header.php"; ?>

	<section class="main">
		<div class="container p-2">
			<h1>Add Data</h1>
			<hr>
				<?php 
				if (isset($_POST['datasavebtn'])) {
					$data_added_datetime =  date("Y-m-d H:i:s");
					$data_user_ID =  '1';
					$data_title =  $_POST['datatitle'];
					$data_description =  $_POST['datanote'];
					$data_username =  $_POST['datausername'];
					$data_password =  $_POST['datapass'];
					$data_status =  'active';

					$sql = "INSERT INTO ps_data( data_added_datetime, data_user_ID, data_title, data_description, data_username, data_password, data_status) VALUES ('$data_added_datetime',$data_user_ID, '$data_title', '$data_description', '$data_username','$data_password', '$data_status')";

					if($conn->query($sql)){

						echo "Data Added Successfull!";
					}else{
						echo "Faild to add Data: ".$conn->error;
					}

				}

			 ?>

		

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
					  <input type="submit" name="datasavebtn" class="btn btn-primary px-4" value="Save Data">
					</form>
				</div>
			</div>


		</div>


		
	</section>

<?php include "footer.php"; ?>
	