<?php

    require "includes/db.php";
    session_destroy();
    header('location:index.php');

?>