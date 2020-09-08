<?php


$fname = $_POST["fname"];
if (!empty($fname)) {
    echo "$fname<br>";
} else {
    echo "Error...First Name is Empty";
}
$lname = $_POST["lastname"];
if (!empty($lname)) {
    echo "$lname<br>";
} else {
    echo "Error......Last Name is Empty";
    exit;
}
$Email = $_POST["add"];
if (!empty($Email)) {
    echo "$Email<br>";
} else {
    echo "Error......Email Adrress Does not exist";
    exit;
}
$Password = $_POST["password"];
$Confirmpass = $_POST["cpassword"];
if ($Password == $Confirmpass) {
    echo "resisteration succesful<br>";
} else {
    echo "error password not match";
}
