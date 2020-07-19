<?php
require './include/login.inc.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Admin</title>
    <link rel="stylesheet" type="text/css" href="./styleDashboard.css">
</head>
<body>
      <div class="titlulDashboard">
          <img src="../img/logo.png" alt="Logo" width="100px" height="100px">
          <h1>#blog/admin</h1>
      </div>
      <div class="formContinut">
        <form method="post">
            <label for="fname">Username:</label><br>
            <input type="text" id="fname" name="username"><br>
            <label for="lname">Password:</label><br>
            <input type="password" id="lname" name="password"><br><br>
            <button type="submit" name="login">Log in</button>
        </form>
      </div>
</body>
</html>