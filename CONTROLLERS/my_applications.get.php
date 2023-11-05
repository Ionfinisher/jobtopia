<?php
session_start();
require_once('../MODELS/Job_applications.class.php');
require_once('../MODELS/Job.class.php');
require_once('../MODELS/Job_seekers.class.php');

$job_seeker_id = $_SESSION['job_seeker_id'];

$objJA = new Job_application();
$objJs = new Job_seeker();
$objJo = new Job();

$myApps = $objJA->getJob_applicationByJId($job_seeker_id);

require_once('../VIEWS/my_applications.page.php');
