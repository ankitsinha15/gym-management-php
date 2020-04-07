<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>enrolled details</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron" style="background: url('2.jpg') no-repeat;background-size:cover;height: 550px;"></div>
	<div class="container">
		<div class="card">
			<div class="card-body" style="background-color: #333333;color: #ffffff;">
				<div class="row">
					<div class="col-md-2">
				<a href="admin.php" class="btn btn-light">Back</a><br>
			</div>
			<div class="col-md-3"><h3>Enrolled details</h3></div>
			<div class="col-md-6">
				<form class="form-group" action="search_user.php" method="post">
					<div class="row"></div>
					<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter contact"></div><br>
					<div class="col-md-2"><input type="submit" name="search_user_submit" class="btn btn-light" value="search"></div>
				</div>
				</form>
			</div></div>
			<div class="card-body" style="background-color: #333333;color: #ffffff;">
			<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Nmae</th>
      <th>E-mail</th>
      <th>Contact</th>
      <th>Appointment</th>
    </tr>
  </thead>
  <tbody>
   <?php get_enrolled_details(); ?>
  </tbody>
  
</table>
</div></div>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>