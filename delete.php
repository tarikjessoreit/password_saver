<?php include "header.php"; ?>

<?php 
	$msg="";
	$err="";
	if (isset($_GET['did']) && !empty($_GET['did'])) {
		$did = $_GET['did'];

		if (isset($_POST['confbtn'])) {
			$txt = $_POST['deltxt'];
			if ($txt == 'DELETE') {
				$sql = "UPDATE ".TBL_DATA." SET  data_status='deleted' WHERE ID = $did";
				if($conn->query($sql)){
					$msg = 'Data Deleted Successfully! <a href="dashboard.php">Goto All Data page</a>';
				}else{
					$err="Faild to delete Data: ".$conn->error;
				}	
			}else{
				$err="Please Type DELETE and Try Again";
			}
		}

		
	}else{
		header('location:dashboard.php');
	}


?>

	<section class="main">
		<div class="container p-2">
			<h1>Delete Data</h1>
			<hr>

			<form class="row g-3" method="POST">
			  <?php if(!empty($msg)){ ?>
			  <div class="alert alert-success"><?php echo $msg; ?></div>
			  <?php } ?>
			  <?php if(!empty($err)){ ?>
			  <div class="alert alert-danger"><?php echo $err; ?></div>
			  <?php } ?>
			  <div>Please Enter "DELETE" to cinfirm</div>
			  <div class="col-auto">
			    <input type="text" name="deltxt" class="form-control" id="delinp" placeholder="Please Type DELETE" required>
			  </div>
			  <input type="checkbox" required> Please check to confirm
			  <div class="col-auto">
			    <button type="submit" name="confbtn" value="okay" class="btn btn-danger mb-3">Confirm Delete</button>
			  </div>
			</form>
				
		</div>


		
	</section>

<?php include "footer.php"; ?>
	