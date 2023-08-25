<?php
include("include/conn.php");
if(isset($_POST['signup']))
{
  $name=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $about=$_POST['about'];
  //accessing image
  $image1=$_FILES['image']['name'];
  //acessing img tmp name
  $image=$_FILES['image']['tmp_name'];
 
  
  //check the form

  if($name==''or $email==''or $password==''or $gender=='')
{
  echo"<script>alert('insert all the fields')</script>";
  echo "<script>window.location.href='signup.php'</script>";
  exit();
}
else{
  $sql="SELECT * from user where email='$email'";
  $result = $conn->query($sql);
if ($result->num_rows > 0) 
  {
echo "<script>alert('Email id already register')</script>";
        echo "<script>window.location.href='signup.php'</script>";
    
  }
  else
  {
    echo"1";
  move_uploaded_file($image,"images/$image1");
  $product="INSERT INTO `user`( `name`, `email`, `password`, `gender`, `image`,`about`) VALUES('$name','$email','$password','$gender','$image1','$about')";
  $product_result=$conn->query($product);
  if($product_result)
  {
      echo"<script>alert('inserted successfully')</script>";
      header("location:index.php");

  }
}
}
}
?>