<?php include "header.php"; ?>

	<section class="main">
		<div class="container p-2">
			<h1>Dashborad</h1>
			<hr>
			<!-- data table -->
			<div class="card">
				<div class="card-body">
					<table id="alldata" class="table table-striped" style="width:100%">
				        <thead>
				            <tr>
				                <th>ID</th>
				                <th>Date</th>
				                <th>URL / TITLE</th>
				                <th>Username</th>
				                <th>Password</th>
				                <th>Note</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        <tbody>

				        	<?php 
				        	$uid = $_SESSION["UID"];
				        	$sql = "SELECT * FROM ".TBL_DATA." WHERE data_status='active' && data_user_ID = $uid";
				        	$result = $conn->query($sql);
				        	if ($result->num_rows > 0) {
				        		while ($row = $result->fetch_assoc()){ ?>



				            <tr>
				                <td><?php echo $row['ID']; ?></td>
				                <td><?php echo $row['data_added_datetime']; ?></td>
				                <td><?php echo $row['data_title']; ?></td>
				                <td><?php echo $row['data_username']; ?></td>
				                <td><input type="password" class="showpass" value="<?=$row['data_password']?>"></td>
				                <td><?php echo $row['data_description']; ?></td>
				                <td>
				                	<a href="edit-data.php?did=<?php echo $row['ID']; ?>" class="btn btn-sm btn-success">
				                		<i class="fa-solid fa-edit"></i> Edit
				                	</a>
				                	<a href="delete.php?did=<?php echo $row['ID']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Delete</a>
				                </td>
				            </tr>

				            <?php 	
				            	}
				        	}

				        	 ?>
				            
				        </tbody>
				        <tfoot>
				            <tr>
				                <th>ID</th>
				                <th>Date</th>
				                <th>URL / TITLE</th>
				                <th>Username</th>
				                <th>Password</th>
				                <th>Note</th>
				                <th>action</th>
				            </tr>
				        </tfoot>
				    </table>
				</div>
			</div>


		</div>

		
	</section>

<?php include "footer.php"; ?>
	