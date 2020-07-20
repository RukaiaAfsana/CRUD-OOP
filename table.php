<?php include_once "app/auto_load.php"; ?>
<?php

  $user=new User;
  if(isset($_GET['id'])){
  $mess=$user->userRemove($_GET['id']);//deleteing  a user from table and for this if with id any link wull be captured. sadddd !!!
  }

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table ">
		<a class="btn btn-primary shadow" href="index.php">Add New</a>
		<div class="card">
			<div class="card-body">
				<?php

				 if(isset($mess))
				 	echo $mess;
				?>
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>User Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						 $unfetchedDataOfUser=$user->showAllData();
						 //var_dump($fetched_user);
						 while ($fetched_user=$unfetchedDataOfUser->fetch_assoc()): 
						 	# code...
						 	
						
						?>
						<tr>
							<td><?php echo  $fetched_user['id'] ?></td>
							<td><?php echo  $fetched_user['name'] ?></td>
							<td><?php echo  $fetched_user['email'] ?></td>
							<td><?php echo  $fetched_user['cell'] ?></td>
							<td><?php echo  $fetched_user['uname'] ?></td>
							<td>
								<a class="btn btn-sm btn-info" href="profile.php?id=<?php echo  $fetched_user['id'] ?>">View</a>
								<a class="btn btn-sm btn-warning" href="update.php?id=<?php echo  $fetched_user['id'] ?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="table.php?id=<?php echo  $fetched_user['id'] ?>">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>