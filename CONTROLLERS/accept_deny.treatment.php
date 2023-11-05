<?php
require_once('../MODELS/Job_applications.class.php');

$objJA = new Job_application();

$id = $_GET["id"];
$action = $_GET["action"];

if ($action == 1) {
    $objJA->acceptJob_application($id);
    header('location:Job_applications.get.php');
} else if ($action == 0) {
    $objJA->denyJob_application($id);
    header('location:Job_applications.get.php');
} else {
    echo "<script> alert('Something Wrong happened ‼️');
    window.location:Job_applications.get.php';
    </script>";
}
