<?php include "header.php"; ?>

	<section class="main">
		<div class="container p-2">
			<h1>Edit Data</h1>
			<hr>

			<?php 
			$msg="";
			$err="";
			// get data from database
				if (isset($_GET['did'])) {
					$did =  $_GET['did'];

					$sql = "SELECT * FROM ".TBL_DATA." WHERE ID = $did";
		        	$result = $conn->query($sql);
		        	if ($result->num_rows > 0) {
		        		while ($row = $result->fetch_assoc()){ 
		        		$_title =  $row['data_title'];
						$_description =  $row['data_description'];
						$_username =  $row['data_username'];
						$_password =  $row['data_password'];
		        		}
		        	}
				}else{
		        		header('location:dashboard.php');
		        }


		        // Update data
				if (isset($_POST['datasavebtn'])) {
					$data_title =  $_POST['datatitle'];
					$data_description =  $_POST['datanote'];
					$data_username =  $_POST['datausername'];
					$data_password =  $_POST['datapass'];

					$sql = "UPDATE ".TBL_DATA." SET  data_title='$data_title', data_description='$data_description', data_username='$data_username', data_password='$data_password' WHERE ID = $did";

					if($conn->query($sql)){
						$msg = 'Data Updated Successfully! <a href="dashboard.php">Goto All Data page</a>';
					}else{
						$err="Faild to edit Data: ".$conn->error;
					}
				}


			 ?>

			<div class="row">
				<div class="col-6">
					<?php if(!empty($msg)){ ?>
					<div class="alert alert-success"><?php echo $msg; ?></div>
					<?php } ?>
					<?php if(!empty($err)){ ?>
					<div class="alert alert-danger"><?php echo $err; ?></div>
					<?php } ?>

					<form action="" method="POST">
					  <div class="form-group mb-4">
					    <label for="datatitle">Title</label>
					    <input type="text" name="datatitle" value="<?=$_title?>" class="form-control" id="datatitle" aria-describedby="emailHelp" placeholder="Enter Title">
					  </div>
					  <div class="form-group mb-4">
					    <label for="datausername">Username / Email</label>
					    <input type="text" name="datausername"  value="<?=$_description?>"  class="form-control" id="datausername" aria-describedby="emailHelp" placeholder="Enter username / email">
					  </div>
					  <div class="form-group mb-4">
					    <label for="datapassword">Password</label>
					    <input type="text" name="datapass"  value="<?=$_password?>"  class="form-control" id="datapassword" placeholder="Password">
					  </div>

					  <div class="form-group mb-4">
					    <label for="datanote">Note Here</label>
					    <textarea class="form-control" name="datanote"  id="datanote" rows="3"><?=$_description?></textarea>
					  </div>
					  <input type="submit" name="datasavebtn" class="btn btn-primary px-4" value="Save Data">
					</form>
				</div>
			</div>


		</div>


		
	</section>

<?php include "footer.php"; ?>
	