<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
	
<div class="sign_form">
	<form action="signin_user.php" method="POST"  enctype="multipart/form-data">
		<div class="form-header">
			<h2>sign in</h2>
			<p>Login to mychat</p>
		</div>
		<div class="form-group">
			<label>Email</label>
			<input type="email" class="form-control" name="email" placeholder="enter the email" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password" placeholder="enter the password" required>
		</div>
		<div class="small">Forgot password<a href="forgort.php"></a>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary"  name="sign_in">sign in</button>
		</div>
		<div class="text-center small" style="color:#674288"><a href="signup.php">don't have an account</a></div>
	</form>
	
</div>
</body>
</html>