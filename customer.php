
<?php
  $db_name="oop_crud";
  $user="root";
  $pass="";
  $host="localhost";
  $connection=new mysqli($host, $user,$pass,  $db_name);
  $sql="SELECT * FROM CUSTOMERS LEFT JOIN PRODUCTS ON customers.customer_id=products.buyer_id";
  $result=$connection->query($sql);
  

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
						
						 //var_dump($fetched_user);
						 while ($fetched_customers=$result->fetch_assoc()): 
						 	# code...
						 	
						
						?>
						<tr>
							<td><?php echo  $fetched_customers['customer_id'] ?></td>
							<td><?php echo  $fetched_customers['customer_name'] ?></td>
							<td><?php echo  $fetched_customers['product_name'] ?></td>
							<td><?php echo  $fetched_customers['price'] ?></td>
							
							
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