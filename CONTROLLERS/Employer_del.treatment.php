<?php
session_start();
require_once('../MODELS/Employers.class.php');

$objE = new Employer();

$employer_id = $_GET['employer_id'];

// suppression des donnees
$objE->deleteEmployer($employer_id);

// End the session
session_destroy();

// Redirect the user to the login page
header("location:../index.php");
