<?php
include("conn.php");
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $search_query=$_POST['search_query'];
        $get_user="select* from user where name like '%$search_query%'";
    }
    else{
      $get_user="select* from user";
    }
    $run_user=mysqli_query($conn,$get_user);
      while($row_user=mysqli_fetch_assoc($run_user))
      {
        $name=$row_user['name'];
        echo"<script>window.open('../logged_in.php?user_name=$name','_self')</script>";
        echo"hi";
      }
  
?>