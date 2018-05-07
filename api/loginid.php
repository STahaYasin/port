<?php
session_start();
if(isset($_SESSION["admin_id"])){

}
else{
    header("location: login.php");
}
$userid = $_SESSION["admin_id"];
$sql = "SELECT firstname, lastname, email FROM admins";
/* SEARCH FOR FIRSTNAME */
$frtname = mysqli_query($conn,"SELECT firstname FROM admins WHERE ad_id = $userid");
$frstname  = mysqli_fetch_array($frtname);
if (!$frstname) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
    $fristname = utf8_encode(ucwords($frstname['firstname']));
/* SEARCH FOR LASTNAME */
$ltname = mysqli_query($conn,"SELECT lastname FROM admins WHERE ad_id = $userid");
$lstname  = mysqli_fetch_array($ltname);
if (!$lstname) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
    $lastname = utf8_encode(ucwords($lstname['lastname']));
/* SEARCH FOR EMAIL */
$umail = mysqli_query($conn,"SELECT email FROM admins WHERE ad_id = $userid");
$usmail  = mysqli_fetch_array($umail);
if (!$usmail) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
    $usermail = utf8_encode(ucwords($usmail['email']));
?>
