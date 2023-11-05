<?php
session_start();

// End the session
session_destroy();

// Redirect the user to the login page
header("location:../index.php");
