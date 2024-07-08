<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) {
    $adminuser = $_POST['username'];
    $password = md5($_POST['password']);
    $query = mysqli_query($con, "select ID from tbladmin where UserName='$adminuser' && Password='$password' ");
    $ret = mysqli_fetch_array($query);
    if($ret > 0) {
        $_SESSION['odrsaid'] = $ret['ID'];
        header('location:dashboard.php');
    } else {
        echo "<script>alert('Invalid Details');</script>";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sparkle | Login Page</title>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
    body {
        background-image: url('images/bg5.jpg'); /* Set your background image path here */
        background-size: cover;
        font-family: 'Roboto Condensed', sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background: rgba(0, 0, 0, 0); /* Completely transparent background */
        color: #fff;
        text-align: center;
        padding: 50px;
        border-radius: 10px;
        width: 300px;
    }
    .container img {
        width: 100px;
        height: auto;
    }
    .container h4 {
        margin: 20px 0;
    }
    .container input[type="text"],
    .container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #fff;
        background: rgba(0, 0, 0, 0.7); /* Semi-transparent input backgrounds */
        color: #fff;
        border-radius: 5px;
    }
    .container input[type="submit"] {
        background: #007BFF;
        border: none;
        padding: 10px;
        width: 100%;
        border-radius: 5px;
        color: #fff;
        cursor: pointer;
        margin-top: 10px;
        transition: background 0.3s, transform 0.3s;
    }
    .container input[type="submit"]:hover {
        background: #0056b3;
        transform: scale(1.1);
    }
    .container input[type="submit"]:active {
        background: #004494;
        transform: scale(0.9);
    }
    .forgot-grid {
        margin-top: 20px;
    }
    .forgot-grid a {
        color: #007BFF;
        text-decoration: none;
    }
    .forgot-grid a:hover {
        text-decoration: underline;
    }
    @keyframes moveButton {
        0%, 100% { left: 0; top: 0; }
        25% { left: 200px; top: 0; }
        50% { left: 200px; top: 200px; }
        75% { left: 0; top: 200px; }
    }
    .runaway-button {
        position: relative;
    }
    .runaway-button:hover {
        animation: moveButton 2s infinite;
    }
</style>
</head>
<body>
<div class="container">
    <!-- <img src="logo.png" alt="Logo">  -->
    <h1>ADMIN LOGIN</h1>
    <form role="form" method="post" action="">
        <p style="font-size:16px; color:red" align="center"> <?php if($msg){ echo $msg; } ?> </p>
        <input type="text" class="user" name="username" placeholder="Username" required="true">
        <input type="password" name="password" class="lock" placeholder="Password" required="true">
        <input type="submit" name="login" value="Sign In" class="runaway-button">
        <div class="forgot-grid">
            <div class="forgot">
                <a href="../index.php">Back to Home</a>
            </div>
            <div class="forgot">
                <a href="forgot-password.php">Forgot password?</a>
            </div>
        </div>
    </form>
</div>
</body>
</html>
