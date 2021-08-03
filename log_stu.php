<?php include('server_stu.php') ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="acc_styles.css">
</head>
<body style="background-color: #e6eaf0;">
  <div class="header">
    <h2>Login</h2>
  </div>
   
  <form method="post" action="log_stu.php">
    <?php include('error_fre.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" required>
    </div>
    <div class="input-group">
      <label>college</label>
      <select name="college" style="height: 40px; width: 376px; padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;" required;>
        <option value="null"></option>
        <option value="svecw">SVECW</option>
        <option value="vit">VIT</option>
        <option value="srkr">SRKR</option>

      </select>
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