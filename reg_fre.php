<?php include('server_fre.php') ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="acc_styles.css">
</head>
<body style="background-color: #e6eaf0;">
  <div class="header">
    <h2>Register</h2>
  </div>
    <form method="post" action="reg_fre.php">
  	  	<?php include('error_fre.php'); ?>

  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required=>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_fre">Register</button>
    
	<p style="margin-top: 20px;">
  		Already a member? <a href="log_fre.php">Sign in</a>
  	</p>
  </form>
</body>
</html>