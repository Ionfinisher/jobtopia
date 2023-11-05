<?php
require_once('../MODELS/Employers.class.php');
require_once('../MODELS/Job_seekers.class.php');
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$table = $_POST["table"];

$objE = new Employer();
$objJ = new Job_seeker();

if ($table == "Employers") {
    $objE->setEmployer($username, $password);
    header('location:../index.php');
} else if ($table == "Job_seekers") {
    $objJ->setJob_seeker($username, $email, $password);
    header('location:../index.php');
} else {
    echo "<script> alert('An error occured. Please try again');
    window.location = '../index.php';
    </script>";
}
