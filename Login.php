<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<h2>Login Form</h2>
<?
$session_start();
$token = $_SESSION['token'] = md5(uniqid (mt_rand(),true));
?>
<form action="db.php" method="POST">
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" id="user" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" required>
    <input type="hidden" name ="token" value ="<?php echo $token;?>" />
    <button type="submit" id="btn" value="Login">Login</button>
  </div>
</form>

</body>
</html>