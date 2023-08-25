<?php
session_start();

include("include/conn.php");
if (!isset($_SESSION['id'])) {
	header("location:signin.php");
}
else
{?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  


  <link rel="stylesheet" type="text/css" href="css/logged_in.css">
	<title>my chat</title>
</head>
<body>
<div class="container-fluid main-section">
	<div class="row">
		<div class="col-md-3 col-sm-3 col-xs-12 left-sidebar" style="background-color:black;">
			<div class="input-group-btn">
				<div class="input-group-btn">
					<center>
<form action="include/find_friends_function.php" method="POST" >
					<div class="input-group col-md-10 mb-3 mt-3">
  <input type="text" name="search_query" class="form-control" placeholder="search" aria-label="search" aria-describedby="search">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" name="search_btn">Button</button>
  </div>
</div>
</form>
					</center>
				
			</div>
			</div>
			<hr>
			<div class="left-chat">
				<ul>
					<?php
					include("include/get_users_data.php");
					?>
				</ul>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
			<div class="row">
				<?php
				
				$user=$_SESSION['id'];
				$sql="SELECT * from user where id='$user'";
	$result=$conn->query($sql);
	$row=mysqli_fetch_assoc($result);
	$user_id=$row['id'];
	$user_name=$row['name'];
	

				?>
				<?php
				if(isset($_GET['user_name']))
				{
			global $conn;
		$username=$_GET['user_name'];
		$getuser="SELECT * from user where name='$username'";
		$runuser=$conn->query($getuser);
$row_user=$runuser->fetch_assoc();	
$username=$row_user['name'];
	$profile=$row_user['image'];

}
$total_msg="SELECT * from user_chat where sender_username='$user_name'and reciver_usernmae='$username'";
$run_messages=$conn->query($total_msg);
	$total=mysqli_num_rows($run_messages);
				?>
				<div class="col-md-12  right-header" style="background-color:black;">
					<div class="right-header-img">

						<img src="images/<?php echo $profile;?>">
					</div>
					<div class="right-header-detail">
						<form method="post">
							<p><?php echo $username;?></p>
							<span><?php echo $total;?>messages</span>&nbsp &nbsp
							<div class="btn-group" style="float:right;">
							<i style="font-size:24px;" class="fa"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">&#xf141;</i>
  <div class="dropdown-menu dropdown-menu-right mt-3">
    <a href="setting.php" class="dropdown-item">profile</a>
	<hr>
    <a href="logout.php" class="dropdown-item">logout</a>
  </div>
</div>
						</form>
						
				</div>
			</div>
		</div>
				<div class="row">
					<div id="scrolling_to_bottom" class="col-md-12 right-header-contentchat" style="overflow:scroll">
						<?php
						$update_msg=mysqli_query($conn,"UPDATE user_chat set msg_status='read' where sender_username='$username'and reciver_usernmae='$user_name'");
						$sel_msg="SELECT * from user_chat where sender_username='$user_name'and reciver_usernmae='$username'OR sender_username='$username'and reciver_usernmae='$user_name'ORDER BY 1 asc";
						$run_msg=mysqli_query($conn,$sel_msg);
						while ($row=mysqli_fetch_array($run_msg)) {
							$sender_username=$row['sender_username'];
							$reciver_usernmae=$row['reciver_usernmae'];
							$msg_content=$row['msg_content'];
							$msg_date=$row['msg_date'];
							$msg_status=$row['msg_status'];
							?>
						
						<ul>
							<?php
							if($user_name==$sender_username And $username==$reciver_usernmae)
							{
								echo"
								<li  style='list-style: none;'>
								<div class='rightside-right-chat' style='background-color:#0FFF50;
								; margin-top:10px; color:white; border-radius:10px;'>
								<span style='float:right;'>$user_name<small>$msg_date</small><br><br>".(($msg_status
							=="read") ?'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-check2-all" viewBox="0 0 16 16">
  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
</svg>':'<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
</svg>')
								."</span>
								<p style='padding:10px 0 10px 10px;'>$msg_content</p></div></li>
								";
			
							}
							elseif($user_name==$reciver_usernmae And $username==$sender_username)
							{
								echo"
								<li style='list-style: none;' >
								<div class='rightside-left-chat' style='background-color:#283747 ; margin-top:10px; color:white; border-radius:10px;'>
								<span style='float:right;'>$username<small>$msg_date</small></span>
								<p style='padding:10px 0 10px 10px;'>$msg_content</p></div></li>
								";
							}
							?>
						</ul>
						<?php
					}
						?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 right-chat-textbox" >
						<form  method="post">
							<input type="text" name="msg_content" style="height:43px;" placeholder="write a msg">
							<button class="btn mb-2" name="sumbit"><i class="fa fa-telegram" aria-hidden="true"></i></button>
						</form>
				</div>
	</div>
		</div> 
	</div>



<script type="text/javascript">
	$('#scrolling_to_bottom').animate({
		scrollTop:$('#scrolling_to_bottom').get(0).scrollheight},1000);
	
</script>
<script type="text/javascript">
	$(document).ready(function () {
		var height=$(window).height();
		$('.left-chat').css('height',(height-92)+'px');
		$('.right-header-contentchat').css('height',(height-163)+'px');
		// body...
		// body...
	});
</script>

</body>
</html>
<?php
if (isset($_POST['sumbit'])) {
$msg=$_POST['msg_content'];
if($msg=="")
{
	echo"<script>alert('Don't send empty msg ')</script>";
}
else{
$insert="insert into user_chat(sender_username,reciver_usernmae,msg_content,msg_status,msg_date)values('$user_name','$username','$msg','unread',NOW())";
$run_insert=mysqli_query($conn,$insert);
if($run_insert)
{
	echo"<script>window.open('logged_in.php?user_name=$username','_self')</script>";
}
}
}
$conn->close();
exit();
}?>