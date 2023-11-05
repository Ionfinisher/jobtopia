<?php
require_once('../MODELS/Job.class.php');

$objJo = new Job();

// suppression des donnees
$id = $_GET["id"];
$objJo->deleteJob($id);
header('location:Employer_dash.get.php');
