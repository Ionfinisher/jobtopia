<?php
session_start();
require_once('../MODELS/Job_applications.class.php');
require_once('../MODELS/Job.class.php');
require_once('../MODELS/Job_seekers.class.php');
require_once('../MODELS/Jointures.class.php');

$employer_id = $_SESSION['employer_id'];

$objJA = new Job_application();
$objJs = new Job_seeker();
$objJ = new Jointure();
$objJo = new Job();

$Apps = $objJ->getJob_applicationByEId($employer_id);
require_once('../VIEWS/job_applications.page.php');
