<?php include('server_stu.php') ?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="acc_styles.css">
</head>
<body style="background-color: #e6eaf0;">
  <div class="header">
    <h2>Register</h2>
  </div>
    <form method="post" action="reg_stu.php">
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
      <label>college</label>
      <select name="college" style="height: 40px; width: 376px; padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;">
        <option value="null"></option>
        <option value="svecw">SVECW</option>
        <option value="vit">VIT</option>
        <option value="srkr">SRKR</option>

      </select>
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
    
  <p>
      Already a member? <a href="log_stu.php">Sign in</a>
    </p>
  </form>
</body>
</html>