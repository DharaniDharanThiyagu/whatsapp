
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<h5 class="card-title mb-0">Gender</h5>
</div>
<div class="card-body">
<form method="POST" action="gendersave.php">
<div class="row">
<div class="col-md-8">
<div class="form-group">
<label for="inputUsername">Gender</label>
<select name="gender" class="form-select">
    <option value="male">Male</option>
    <option value="female">female</option>
    <option value="other">Others</option>
</select>
</div>

<br>
<button type="sumbit" class="btn btn-primary">Save changes</button>
</form>
</div>
</div>
    </div>
</body>
</html>