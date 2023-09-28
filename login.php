<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <title>login page</title>
</head>
<body>

    <div class="navbar">
        <nav class=" navlist displayflex">
          <div class="navlogo">
            <h2><a href="first-page.php"> Teachus</a></h2>
          </div>
      </nav>
      </div>


     <div class="loginpage">
             
             <div class="loginsub">
                <p>Login</p>
                <input type="email"   name = "email" placeholder=" Email " id="email" required>
                <input type="password" name="password" placeholder="Password"  id=" password" required>
                <button id="loginbtn" name="login">Login</button>
             </div>
     </div>
      
     <script src="script.js"></script>
</body>
</html>
<?php

  include ('connection.php');
  if(isset($_POST['login'])){
      $username = $_POST['email'];
      $password = $_POST['password'];

      $search = "SELECT * FROM signupdetail WHERE email='$username'";
      $query = mysqli_query($conn,$search);
      $cnt = mysqli_num_rows($query);

      if($search){
        $pass = mysqli_fetch_assoc($query);
        $db = $email['password'];
        $pass_decode = password_verify($password,$db);

        if($pass_decode){
          echo "loginsuccessfull";
        }
        else{
          echo "password incorrect";
        }
      }
        else{
          echo "invalid email";
        }
      }
  ?>