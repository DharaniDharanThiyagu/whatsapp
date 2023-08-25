<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$conn=mysqli_connect("localhost","root","","whatsapp");
$user="SELECT * from user";
$run_user=$conn->query($user);
while ($row_user=mysqli_fetch_assoc($run_user)) {
	$id=$row_user['id'];
	$username=$row_user['name'];
	$profile=$row_user['image'];
	$login=$row_user['login'];
	$about=$row_user['about'];
	echo"<li><div class='chat-left-img'>
	<img src='images/$profile' width='50px;' style='border-radius:60%;'>
	</div>
	<div class='chat-left-details'>
	<p style='color:white;'><a href='logged_in.php?user_name=$username' style='text-decoration:none;color:white;'>$username</a><br>$about</p>";
if($login=="online")
{
	echo"<span style='color:green;'><i class='fa fa-circle' aria-hidden='true'></i>online<span>";
}
else
{
	echo"<span style='margin-right:20px;><i class='fa fa-circle-o' aria-hidden='true'></i>offline<span>";
}
"
</div>
	</li>

	";
}
?>