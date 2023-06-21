<?php
// include "db_conn.php";
session_start();

include('db_conn.php');
if(isset($_POST['uname']) && isset($_POST['password'])){    

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $_SESSION['uname'] = $uname;

    $pass = validate($_POST['password']);

    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();    
    } else if(empty($pass)){
        header("Location: index.php?error=password is required");
        exit();  
        
    } else {
         $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

         $result = mysqli_query($conn, $sql);

         if (mysqli_num_rows($result) > 0){
            header("Location: welcome.php");
         } else {
            header("Location: index.php?error=Invalid credentials");
         }
    }
}
else{ 
    header("Location: index.php");
}
?>