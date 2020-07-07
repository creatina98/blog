<?php
if (isset($_POST['submit'])){
    require 'dbc.inc.php';

    $content = $_POST['content'];

    $sql = "INSERT INTO articol (continut_articol) values (?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../dashboard/admin.php?error=sqlerror");
        exit();
    }else{
        mysqli_stmt_bind_param($stmt, "s", $content);
        mysqli_stmt_execute($stmt);
    }

    header("Location: ../dashboard/admin.php?error=sqlerror");
    exit();
}