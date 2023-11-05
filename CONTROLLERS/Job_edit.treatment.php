<?php
require_once('../MODELS/Job.class.php');
$objJo = new Job();

$id = $_POST["id"];
$employer_id = $_POST["employer_id"];
$company_name = $_POST["company_name"];
$job_title = $_POST["job_title"];
$location = $_POST["location"];
$description = $_POST["description"];
$requirements = $_POST["requirements"];



$objJo->updateJob($id, $employer_id, $company_name, $job_title, $location, $description, $requirements);
header('location:Employer_dash.get.php');
