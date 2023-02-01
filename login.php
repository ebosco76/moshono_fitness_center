<?php

    require "includes/db.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = "SELECT staff_id, fullname, username, password, position, status 
              FROM staff 
              WHERE username = '$username' AND password = '$password' AND
              status = 1";

    $results = mysqli_query($conn, $query);
    if ( mysqli_num_rows($results) != 1) {
        $_SESSION['message'] = "Username or password may be incorrect";
        header('location: index.php');
    } else {
            $row = mysqli_fetch_array($results);
        // if($row['position'] == 'Admin'){
            $_SESSION['position'] = $row['position'];
            $_SESSION['staff_id'] = $row['staff_id'];
            $_SESSION['username'] = $row['username'];
            header('location: home.php');
        // }else{
        //     $_SESSION['staff_id'] = $row['staff_id'];
        //     $_SESSION['username'] = $row['username'];
        //     header('location: Staff_home.php');
        // }

    }

?>