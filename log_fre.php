<?php include('server_fre.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="acc_styles.css">
</head>
<body style="background-color: #e6eaf0;">
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="log_fre.php">
    <?php include('error_fre.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" required>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="reg_fre.php">Sign up</a>
    </p>
  </form>
</body>
</html>