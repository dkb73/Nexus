<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if (!empty($email) && !empty($password)) {
    $sql = mysqli_query($conn, "SELECT*FROM users2 WHERE email = '{$email}' AND PASSWORD = '{$password}'");
    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
        $status = "Active now";
        $sql2 = mysqli_query($conn,"UPDATE users2 SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
        if($sql2){
            $_SESSION['unique_id'] = $row['unique_id'];
             echo "success";
        }
    } else {
        echo "email or password are incorrect";
    }
} else {
    echo "all input fields are required";
}
