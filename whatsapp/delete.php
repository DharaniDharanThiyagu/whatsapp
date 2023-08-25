
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
<table class="table table-hover">
        <tr>
            <th>Username</th><?php echo "<td>" . $row['name'] . "</td>";?>
           <tr> <th>Email</th><?php echo "<td>" . $row['email'] . "</td>";?>
           <tr> <th>Gender</th><?php echo "<td>" . $row['gender'] . "</td>";?>
           <tr> <th>password</th><?php echo "<td>" . $row['password'] . "</td>";?>
            
        </tr>
    
    </table>
    <td><a class='btn btn-danger' style="float:auto;" href='delete_user.php?id=<?php echo $row['id'];?>'>Delete</a></td>
    </div>
</body>
</html>