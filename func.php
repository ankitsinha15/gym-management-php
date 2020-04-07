<?php
$con=mysqli_connect("localhost","root","","fitnessdb");
if(isset($_POST['login_submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from fitb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("location:admin.php");
}
	else{
		echo "<script>alert('Enter login')</script>";
		echo"<script>window.open('index.php','_self')</script>";
		
	}
}
if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$appoint=$_POST['appoint'];
	$query="insert into fitnessappointment(fname,lname,email,contact,appoint)values('$fname','$lname','$email','$contact','$appoint')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('appointment registered')</script>";
		echo"<script>window.open('admin-panel.php','_self')</script>";	
	}
}

function get_enrolled_details(){
	global $con;
	$query="select * from fitnessappointment";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)){
	$fname=$row['fname'];
	$lname=$row['lname'];
	$email=$row['email'];
	$contact=$row['contact'];
	$appoint=$row['appoint'];
	echo "<tr>

      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$contact</td>
      <td>$appoint</td>
    </tr>";
	}
}



?>