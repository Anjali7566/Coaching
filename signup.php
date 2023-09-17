<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachus website 2023</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="Signupcon">
        <div class="undcon">
            <div class="confsb">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="signup()">Signup</button>
            </div>
            <div class="paragraph">
                <p id="cp">Login into your account</p>
            </div>
            <div class="formscon">
                <form class="login-form" id="login">
                    <div class="lfc">
                        <input type="text" name="email1" placeholder="Username" required>
                        <input type="password" name="password1" placeholder="password" required>
                        <button type="submit">Login</button>
                    </div>
                </form>
                <form  action="" method="POST"class="signup-form" id="signup">
                    <div class="sfc">
                        <input type="text" name="name" placeholder="Username" required>
                        <input type="email" name="email" placeholder="email" required>
                        <input type="password" name="password" placeholder="password" required>
                        <select name="profession">
                            <option value="Select">Select</option>
                            <option value="Teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                        <button type="submit" name="submit">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="signup.js"></script>
</body>

</html>
<?php 
     include 'connection.php';
    if(isset($_POST['submit'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $password= $_POST['password'];
    $profession = $_POST['profession'];

    

   if(!empty($email) && !empty($password && !is_numeric($email))){
     
    $insertquery = "insert into signupdetail(username,email,password,profession) values('$name','$email','$password','$profession')";
    
    $res = mysqli_query($con,$insertquery);

    echo "<script type ='text/javascript'>alert('Successfully Register')</script>";
   }
   else{
    
    echo "<script type ='text/javascript'>alert('Something went wrong')</script>";
   }
}
?>
<?php 
    include ('connection.php');
    if(isset($_POST['login'])){
        $username = $_POST['email'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM signupdetail WHERE email="$username" && password = "$password" ';
        $data = mysqli_query($conn,$query);
        $ttl = mysqli_num_rows($data);
        if($ttl == 1){
            header('location:findteacher.php');
        }
        else{
            echo "Login failed";
        }
    }
    ?>