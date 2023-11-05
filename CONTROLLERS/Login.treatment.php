<?php
session_start();

require_once('../MODELS/Jointures.class.php');

$username = $_POST["username"];
$password = $_POST["password"];

$objJ = new Jointure();

$user = $objJ->getCredents($username, $password);


// Check if a user was found with the specified email and password
if ($user) {
    // Redirect the user to the right page or dashboard
    if ($user['table_name'] == "Job_seekers") {
        // Save the user's ID and username to the session for future use
        $_SESSION['job_seeker_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: ../CONTROLLERS/Seeker_dash.get.php');
    } else if ($user['table_name'] == "Employers") {
        // Save the user's ID and username to the session for future use
        $_SESSION['employer_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header('Location: ../CONTROLLERS/Employer_dash.get.php');
    }
} else {
    echo "<script> alert('Invalid login credentials. Please try again');
    window.location = '../index.php';
    </script>";
}
