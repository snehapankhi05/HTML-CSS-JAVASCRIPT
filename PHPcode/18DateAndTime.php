<?php
// Set the default timezone (adjust as needed)
date_default_timezone_set("Asia/Kolkata");

// Get current hour in 24-hour format
$hour = date("H");

// Determine greeting based on hour
if ($hour >= 5 && $hour < 12) {
    $greeting = "Good Morning!";
} elseif ($hour >= 12 && $hour < 17) {
    $greeting = "Good Afternoon!";
} elseif ($hour >= 17 && $hour < 21) {
    $greeting = "Good Evening!";
} else {
    $greeting = "Good Night!";
}

// Display the greeting
echo $greeting;
?>
