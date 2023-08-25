<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<center>
<div class="signup_form" >
	<form class="form-group" action="signup_user.php" method="POST"  enctype="multipart/form-data">
		<div class="form-header">
			<h2>sign up</h2>
			<p>create new account</p>
		</div>
		<div class="form-group">
			<label>Username</label>
			<input type="text" class="form-control" name="username" placeholder="enter the username" required>
		</div>
		<div class="form-group">
			<label>Profile</label>
			<input type="file" class="form-control" name="image" placeholder="profile" required>
		</div>
		
		<div class="form-group">
			<label>Gender</label>
			<select class="form-control" name="gender">
				<option class="disabled">select your gender</option>
				<option value="male">male</option>
				<option value="female">female</option>
				<option value="others">others</option>
			</select>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="enter the email" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="enter the password" required>
		</div>
		<div class="form-group">
			<label>About</label>
			<input type="text" class="form-control" name="about" placeholder="Write about you" required>
		</div>
		
		<div class="form-group">
			<input type="submit" class="btn btn-primary" value="signup" name="signup">
		</div>
		<div class="text-center small" style="color:#674288"><a href="index.php">alreary have an account</a></div>
</div>
	</form>
</div>
</center>
</body>
</html>