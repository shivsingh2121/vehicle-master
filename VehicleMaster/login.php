
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="#" method="POST" autocomplete="off" id="loginform">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Enter your username"name="gmail" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password"name="password" required>

            <input type="submit" value="Login" class="btn" name="login" >
            <!-- <button type="submit">Login</button> -->
        </form>
        <p id="error-message"></p>
        
        <div class="forgot-password">
            <a href="#" id="forgotPasswordLink">Forgot Password </a>
            <a href="homepage.html" id=""> / back</a>

        </div>
    </div>

    <script src="script.js">
    
        function message()
        {
            alert("Please Sign Up ");
        }

    </script>
</body>
</html>
<?php
error_reporting(0);
include("connection.php");
if(isset($_POST['login']))
{
    $uname = $_POST['gmail'];
    $pwd = $_POST['password'];

    $query="SELECT * FROM data WHERE gmail ='$uname'&& password='$pwd'";
    $result= mysqli_query($conn, $query);
    $total = mysqli_num_rows($result);
   //echo $total;
   if($total >= 1)
   {
    
    header('location:booking.php');
   }
   else{
    echo "<script>alert('NO USER LOGIN')</script>"; 
   }
}

?>