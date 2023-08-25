<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<?php
include('setting.php');
$email=$_POST["email"];
$update="UPDATE user set email='$email' where id='$user_id'"; 
$run_update=$conn->query($update);
if($run_update) 
{
    
    echo "<div class='col-md-7 col-xl-8'><div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div></div>";
}
else{
    echo "$conn->error";
}

?>