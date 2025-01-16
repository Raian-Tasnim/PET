<?php
 
class db
{
    function createConObj()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pet";

        
     $conn = new mysqli($servername, $username, $password, $dbname);
 
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
    
    function insertAdminData($conn, $table, $name, $email,$password,$phone)
    {
        $sql = "INSERT INTO $table (name, email,password,phone) VALUES ('$name', '$email','$password','$phone')";
        return $conn->query($sql);
    }
    // function searchEmail($conn,$table,$email)
    // {
    //     $sql = "SELECT password FROM admin_data WHERE email = '$email'";
    //     $result = $conn->query($sql);

    //     if ($result->num_rows > 0) {
    //         $row = $result->fetch_assoc();
    //         $dbPassword = $row['password'];
    //         if (($password == $dbPassword)) {
    //             echo "Login successful!";
    //         } else {
    //             echo "Invalid password.";
    //         }
    //     } else
    //      {
    //         echo"No data found!!";
    //      }

     function closeCon($conn)
     {
         $conn->close();
     }
}
