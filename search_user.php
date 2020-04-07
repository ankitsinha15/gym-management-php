<html>
<head>
	<title>Search user</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<?php
include("func.php");
if(isset($_POST['search_user_submit']))
{
	$contact=$_POST['search'];
	$query="select * from fitnessappointment where contact=$contact";
	$result=mysqli_query($con,$query);

	echo "<div class='container-fluid' style='margin-top:50px;'>
	<div class'card'>
	<div class='card-body'><a href='enrolled_details.php' class='btn btn-light'>Go back</a></div>
	<img src='2.jpg' class='card-image-top'>
	<div class='card-body' style='background-color: #333333;color: #ffffff;''>
<table class='table table-hover table-dark'>
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
  ";
	while($row=mysqli_fetch_array($result)) {
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$appoint=$row['appoint'];
	echo "<tr>
		<td>$fname</td>
		<td>$lname</td>
		<td>$contact</td>
		<td>$email</td>
		<td>$appoint</td>
		</tr>";
	}
	echo "</tbody></table></div></div></div>";

}



?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>