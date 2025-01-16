<?php include "../Control/admin_reg_control.php" ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="./admin_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chicle&display=swap" rel="stylesheet">


</head>
<body class="box">
    <h1 id="adlog">Admin Login</h1>
    <form action="" method="POST">
        
        <div>
                
            <div class="form-group">
            <label for="name">Email:</label>
                <input type="email" name="email" >
                <?php echo $emailError; ?>
            </div>
                
            <div class="form-group">
            <label for="name">Password:</label>
                <input type="password"  name="password" required>
                <?php echo $passError; ?>
            </div>

            <input type="submit" class="btn" value="Log In">
        </div>
    </form>
                <button class="btn">Create Account</button></a>
             
</body>
</html>
 