<?php include "../Control/admin_reg_control.php" ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Admin Registration</title>
    <link rel="stylesheet" href="./admin_reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chicle&display=swap" rel="stylesheet">


</head>
<body class="box">
    <h1 id="adreg">Admin Registration</h1>
    <form action="" method="POST">
        
        <div>
            <div class="form-group">
            <label for="name">Name:</label>
                <input type="text"  name="username" >
                <?php  echo $nameError; ?>
            </div>
                
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
                
             <div class="form-group">
             <label for="name">Confirm Password:</label>
                <input type="password"  name="confirmPassword" required >
            </div>

            <div class="form-group" >
            <label for="name">Phone no:</label>
                <input type="tel" name="phone" required>
            </div>

            <input type="submit" class="btn" value="Resister">
                
        </div>
    </form>
             
</body>
</html>
 