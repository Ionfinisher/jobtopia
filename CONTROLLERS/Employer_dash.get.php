<?php
session_start();
require_once('../MODELS/Job.class.php');
require_once('../MODELS/Employers.class.php');

$employer_id = $_SESSION['employer_id'];

$objJo = new Job();

$nbre = $objJo->getNumberJob($employer_id);

$jobs = $objJo->getJobByEId($employer_id);

require_once('../VIEWS/employer_dash.page.php');
