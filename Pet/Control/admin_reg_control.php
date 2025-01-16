<?php include "../Model/db.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validation</title>
</head>
<body>
    <?php
        $nameError="";
        $emailError="";
        $passError="";
        $count=0;
 
 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
 
        $name = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirm_password = $_REQUEST['confirmPassword'];
        $phone = $_REQUEST['phone'];


 
        $n_pattern = '/^[A-Za-z]*[A-Z]+[A-Za-z]*$/';
 
 
        if (preg_match($n_pattern, $name)) {
            echo $name;
        } else {
            $count++;
            $nameError= "Invalid name. The name must only contain alphabetic characters and include at least one uppercase letter.";
        }
 
        echo "<br>";
 
 
        $e_pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[cC][oO][mM]+$/';
 
 
        if (preg_match($e_pattern, $email)) {
            echo "Valid email: " . $email;
        } else {
            $count++;
            $emailError= "Invalid email. Please enter an email with the domain ending in '.com'.";
        }
 
        echo "<br>";
 
 
        $p_pattern = '/.*\d.*/'; 
 
        if (preg_match($p_pattern, $password) && $password == $confirm_password) {
            echo "Password is valid.";
        } else {
            $count++;
            $passError= "Password must contain at least one numeric character or password should be matched";
        }
 
        echo "<br>";
 
 
       
 
        if($count>0)
        {
            echo "<br>all info are not valid!<br>";
        }
        else 
        {
            // $data = ["username" => $name, "password" => $password, "email" => $email ""];
            // $json = json_encode($data);
 
            // file_put_contents("../data/userdata.json", $json);

            $mydb = new db();
            $conn = $mydb->createConObj();
            $result = $mydb->insertAdminData($conn,'admin_data', $name, $email,$confirm_password,$phone);
            if($result == true)
            {
                echo"Data inserted successfully!";
            }
            else{
                echo"Error occoured!!";
            }
        }
        
 
 
    }
    ?>
</body>
</html>