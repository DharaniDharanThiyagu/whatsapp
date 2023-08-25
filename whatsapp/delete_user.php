<?php
include("include/conn.php");
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $sql="DELETE from user where id='$id'";
    $mysql=$conn->query($sql);
    if($mysql)
    {
        header("location:index.php");
    }
}
?> 