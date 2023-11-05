<?php
require_once('../MODELS/Job_applications.class.php');

$objJA = new Job_application();

// suppression des donnees
$id = $_GET["id"];
$objJA->deleteJob_application($id);
header('location:my_applications.get.php');
