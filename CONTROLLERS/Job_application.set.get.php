<?php
session_start();


$job_seeker_id = $_GET["job_seeker_id"];
$job_id = $_GET["id"];


require_once('../VIEWS/add_a_job_application.page.php');
