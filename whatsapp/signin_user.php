<?php
session_start();
include("include/conn.php");
if(isset($_POST['sign_in']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * from user where email='$email' and password='$password'";
	$result=$conn->query($sql);
	if($result->num_rows>0)
	{
$user=mysqli_fetch_assoc($result);
$mysql = "UPDATE user SET login = 'online' WHERE id = {$user['id']}";
mysqli_query($conn, $mysql);

$_SESSION['id']=$user['id'];
$sql="SELECT * from user where id={$_SESSION['id']}";
$result=mysqli_query($conn, $sql);

$row=mysqli_fetch_assoc($result);
$username=$row['name'];
        echo "<script>window.location.href='logged_in.php?username=$username'</script>";
        exit();
	}
	else
	{
		echo"<script>alert('Invalid Email and Password ')</script>";
		echo "<script>window.location.href='index.php'</script>";

	}
}
?>