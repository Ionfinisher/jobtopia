<?php
session_start();
require_once('../MODELS/Job.class.php');
require_once('../MODELS/Job_seekers.class.php');

$job_seeker_id = $_SESSION['job_seeker_id'];

$objJo = new Job();
$objJs = new Job_seeker();

$jobs = $objJo->getAllJobs();

require_once('../VIEWS/seeker_dash.page.php');
