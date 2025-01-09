<?php
include("actions/connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="rejister.css">
</head>
<body>
    <div class="login-container">
        <h2>Register</h2>
        <form action="#" method ="POST" autocomplete="off">
            <label for="username">Name</label>
            <input type="text" id="username" placeholder="Enter your username" name = "name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" name ="gmail" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" name="password">
            
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" placeholder="Confirm your password" name="con_password" required>
            <input type="submit" value="Register" name="register" class="button">
            <!-- <button type="submit">Register</button> -->
        </form>
        <p id="error-message"></p>
        
        <div class="forgot-password">
            <a href="loginpage for vehiclemaster.html">Already have an account? Login</a>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
<?php
if($_POST['register'])
{
    // here $user_name,$gmail,password,con_password are the variable used to
    //  store the value current variable and no relation with any other variable name
    $name=     $_POST['name'];
    $gmail  =       $_POST['gmail'];
    $password =     $_POST['password'];
    $conpassword=  $_POST['con_password'];

    $query = "INSERT INTO data(name,gmail,password,con_password) VALUES ('$name','$gmail','$password','$conpassword')";
    $data = mysqli_query($conn,$query);
    if($data)
    {
        echo '<script>alert("Your Registration is Successful")</script>';
        ?>
        <meta http-equiv = "refresh" content = "0; url = http://localhost/VehicleMaster/home.php" />
        <?php
        //  header('location:login.php');
    }
    else{
        echo"failed";
    }
}
?>