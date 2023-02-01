<?php
    require "includes/db.php";
    $position = $_SESSION["position"];
    if(!$_SESSION["staff_id"] || !$_SESSION["username"]){
            $_SESSION['message'] = "Username or password may be incorrect";
            header('location: index.php');
    }else{
        $username = $_SESSION["username"];
        $staff_id = $_SESSION["staff_id"];

        $query = "SELECT * FROM staff WHERE staff_id = $staff_id";
        $result = mysqli_query($conn,$query);

        if (!$result) {
                $_SESSION['message'] = "Username or password may be incorrect";
                header('location: index.php');
                session_destroy();
        }

        if(!mysqli_num_rows($result)){
            $_SESSION['message'] = "Username or password may be incorrect";
            header('location: index.php');
            session_destroy();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Moshono Fitness Center</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/MFClogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
