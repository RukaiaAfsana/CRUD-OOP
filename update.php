<?php include_once "app/auto_load.php"; ?>
<?php

 $id=$_GET['id'];
 $user=new User;
 $unfetch_user=$user->getUser($id);//this $user will return a array 
 $single_user=$unfetch_user->fetch_assoc();// this user will return single data 

  if(isset($_POST['update'])){
        
        
         $name=$_POST['name'];
         $email=$_POST['email'];
         $cell=$_POST['cell'];
         $uname=$_POST['uname'];
        if(empty($name)||empty($email)||empty($cell)||empty($uname)){
        	$mess="<p class=\" alert alert-danger \"> All Fields are required!! <button class=\" close\" data-dismiss=\"alert\">&times;</button></p>";
        }
        else {

           $mess=$user->userUpdate($name,$email,$cell,$uname,$id);

        }
       
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
	
	

	<div class="wrap ">
		<a class="btn btn-primary" href="table.php">All Data</a>
		<div class="card shadow">
			<div class="card-body">
				<?php if(isset($mess))
			       echo $mess;
			    ?>
				
				<h2>Update</h2> 
				<form action="<?php echo $_SERVER['PHP_SELF'] ?>?id=<?php echo $single_user['id'] ?>" method="post">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" value="<?php echo $single_user['name'] ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" value="<?php echo $single_user['email'] ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" value="<?php echo $single_user['cell'] ?>" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="uname"  value="<?php echo $single_user['uname'] ?>"  class="form-control" type="text">
					</div>
					<div class="form-group">
						<input name="update" class="btn btn-primary" type="submit" value="Update">
					</div>
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