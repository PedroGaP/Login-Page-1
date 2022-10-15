<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "auth");

$username = $_GET['username'];
$password = $_GET['password'];

$sql = "SELECT * FROM users WHERE username = '".$username."'";

if($db->connect_errno) {
    die("ERROR: ".$db->connect_error);
}

$query = $db->query($sql);
$assoc = mysqli_fetch_assoc($query);
if($assoc) {
    if($password == $assoc["pass"]) {
        header('location: index.php');
        unset($_SESSION['error']);
    } else {
        $_SESSION['error'] = "Wrong password!";
        header('location: index.php');
    }
}else {
    $_SESSION['error'] = "No user found!";
    header('location: index.php');
}