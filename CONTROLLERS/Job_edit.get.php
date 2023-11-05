<?php
session_start();
require_once('../MODELS/Job.class.php');

$objJo = new Job();

$id = $_GET["id"];

$job1 = $objJo->getJobById($id)->fetch();


require_once('../VIEWS/edit_a_job.page.php');
