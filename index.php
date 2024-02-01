<?php
// Check if all required parameters are provided
if (isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['age'])) {
    // Sanitize input parameters
    $firstname = htmlspecialchars($_GET['firstname']);
    $lastname = htmlspecialchars($_GET['lastname']);
    $age = htmlspecialchars($_GET['age']);

    // Output the first sentence
    echo "Hello, my name is $firstname $lastname.<br>";

    // Output the second sentence based on age
    echo "I am $age years old and ";
    if ($age >= 18) {
        echo "I am old enough to vote in the United States.<br>";
    } else {
        echo "I am not old enough to vote in the United States.<br>";
    }

    // Calculate days based on age
    $days = $age * 365; // Approximate calculation
    echo "I have lived for approximately $days days.<br>";
} else {
    // Output a message if required parameters are not submitted
    echo "Please provide all required parameters: firstname, lastname, and age.";
}

// Add current date
echo "<br>Current date: " . date("Y-m-d");
?>

<!DOCTYPE html>
<html>
<head>
    <title>GET Assignment</title>
</head>
</html>
