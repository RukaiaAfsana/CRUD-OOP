<?php include_once "app/auto_load.php"; ?>
<?php

 $id=$_GET['id'];
 $user=new User;
 $user=$user->getUser($id)->fetch_assoc();
 




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
	
	

	<div class="wrap ">
		<a class="btn btn-primary" href="table.php">All Data</a>
		<div class="card slocalhadow">
			<div class="card-body">
				
				        <h2>Profile</h2>
						<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
							<div class="form-group">
								<label class="col-sm-4 col-form-label"for="">Name </label>
								<label class=" col-form-label" for=""><?php echo $user['name']; ?></label>
						
							</div>
							<div class="form-group">
								<label class="col-sm-4 col-form-label"for="">Email: </label>
								<label class=" col-form-label" for=""><?php echo $user['email']; ?></label>
						
							</div>
							<div class="form-group">
								<label class="col-sm-4 col-form-label"for="">Cell: </label>
								<label class=" col-form-label" for=""><?php echo $user['cell']; ?></label>
						
							</div>
							<div class="form-group">
								<label class="col-sm-4 col-form-label"for="">User name: </label>
								<label class=" col-form-label" for=""><?php echo $user['uname']; ?></label>
						
							</div>
							<div class="form-group">
								<label class="col-sm-4 col-form-label"for="">ID  </label>
								<label class=" col-form-label" for=""><?php echo $user['id']; ?></label>
						
							</div>
						
								<a href="update.php?id=<?php echo $user['id']; ?>" class="btn btn-secondary btn-sm btn-info">Update</a>
							
						</form>
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