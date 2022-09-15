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
				            <tr>
				                <td>25</td>
				                <td>15/04/2021 8:46 pm</td>
				                <td>Gmail.com</td>
				                <td>akkas@gmail.com</td>
				                <td><input type="password" id="show-pass" value="12345"></td>
				                <td>note here....</td>
				                <td>
				                	<a href="edit-data.php" class="btn btn-sm btn-success">
				                		<i class="fa-solid fa-edit"></i> Edit
				                	</a>
				                	<a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i> Delete</a>
				                </td>
				            </tr>
				            
				            
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
	