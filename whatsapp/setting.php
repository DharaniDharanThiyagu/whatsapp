<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="setti.css">
</head>
<body>
    <?php
    include("include/conn.php");
    session_start();
    // Assume you have a database connection here

    // Fetch user profile data from the database
    $user_id = $_SESSION["id"];// Replace with the actual user ID
    $query = "SELECT * FROM user WHERE id = $user_id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="container p-0">
<center><h1 class="h3 ">Settings</h1></center>
<div class="row">
<div class="col-md-5 col-xl-4">
<div class="card">
<div class="card-header">
<h5 class="card-title mb-0">Profile Settings</h5>
</div>
<div class="list-group list-group-flush" role="tablist">
<a class="list-group-item list-group-item-action" data-toggle="list" href="account.php" role="tab">
Account
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="password.php" role="tab">
Password
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="about.php" role="tab">About
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="email.php" role="tab">
Email
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="gender.php" role="tab">
gender
</a>
<a class="list-group-item list-group-item-action" data-toggle="list" href="delete.php" role="tab">
Delete account
</a>
</div>
</div>
</div>



    <?php
    } else {
        echo "User not found.";
    }
    // Close the database connection here
    ?>
</body>
</html>
