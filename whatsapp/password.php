
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat</title>
</head>
<body>
    <?php 
    include("setting.php");?>
<div class="col-md-7 col-xl-8">
<div class="tab-content">
<div class="tab-pane fade show active" id="account" role="tabpanel">
<div class="card">
<div class="card-header">
<div class="card-actions float-right">

</div>
<h5 class="card-title mb-0">password</h5>
</div>
<div class="card-body">
<form method="POST" action="passwordsave.php">
<div class="row">
<div class="col-md-8">
<div class="form-group">
<label for="inputUsername">Password</label>
<input type="text" name="password" class="form-control" id="password" placeholder="password" value="<?php echo $row['password'];?>">
</div>

<br>
<button type="sumbit" class="btn btn-primary">Save changes</button>
</form>
</div>
</div>
    </div>
</body>
</html>