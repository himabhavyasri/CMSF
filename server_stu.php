<?php
session_start();

// initializing variables

$username = "";
$email    = "";
$clg    = "";
$errors = array(); 

// connect to the database

$db = mysqli_connect('localhost', 'root', '', 'cmsf');

if (isset($_POST['reg_fre'])) {
  
  // receive all input values from the form

  $username = $_POST['username'];
  $email = $_POST['email'];
  $clg = $_POST['college'];
  
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  
  if (empty($username)) { 
    array_push($errors, "Username is required"); 
  }

  if (empty($email)) { 
    array_push($errors, "Email is required"); 
  }

  if (empty($clg)) { 
    array_push($errors, "college is required"); 
  }
  
    if (empty($password_1)) { 
      array_push($errors, "Password is required"); 
    }

    if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
    }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  
  $user_check_query = "SELECT * FROM student WHERE username= '$username' OR email='$email' LIMIT 1;";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }


  if (count($errors) == 0) {
      $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO student (username, email, college, password) 
      VALUES('$username', '$email', '$clg', '$password')";

      mysqli_query($db, $query);


    }
}


if (isset($_POST['login_user'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $clg = $_POST['college'];

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM student WHERE username='$username' AND password='$password' AND college='$clg' ";
    
    $results = mysqli_query($db, $query);
   
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      if($clg == "svecw") {
        header("location: svecw.php");
      }
      if($clg == "srkr") {
        header("location: srkr.php");
      }if($clg == "vit") {
        header("location: vit.php");
      }
    }else {
      array_push($errors, "Wrong username/password/college combination");
    }
  }
}


?>


