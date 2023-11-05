<?php
require_once('../MODELS/Job_applications.class.php');

$objJA = new Job_application();

$job_seeker_id = $_POST["job_seeker_id"];
$job_id = $_POST["job_id"];
$resume = $_POST["resume"];


$objJA->setJob_application($job_seeker_id, $job_id, $resume);
header('location:Seeker_dash.get.php');
