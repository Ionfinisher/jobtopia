<?php
session_start();
require_once('../MODELS/Job_seekers.class.php');

$objJs = new Job_seeker();

$job_seeker_id = $_GET['job_seeker_id'];

// suppression des donnees
$objJs->deleteJob_seeker($job_seeker_id);

// End the session
session_destroy();

// Redirect the user to the login page
header("location:../index.php");
