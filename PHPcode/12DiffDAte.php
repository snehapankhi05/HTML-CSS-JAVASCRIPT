<?php
$bgColor = ""; // Default background

if(isset($_POST['submit'])){
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    // Convert to DateTime objects
    $d1 = new DateTime($date1);
    $d2 = new DateTime($date2);

    // Calculate difference in days
    $diff = $d1->diff($d2);
    $days = $diff->days;

    // Check if difference is even or odd
    if($days % 2 == 0){
        $bgColor = "blue"; // Even days -> blue
    } else {
        $bgColor = "red";  // Odd days -> red
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Days Difference</title>
    <style>
        body {
            background-color: <?php echo $bgColor; ?>;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h1>Calculate Days Difference</h1>
    <form method="POST" action="">
        <input type="date" name="date1" required>
        <input type="date" name="date2" required><br>
        <button type="submit" name="submit">Calculate</button>
    </form>

    <?php
    if(isset($days)){
        echo "<h2>Number of days between $date1 and $date2: $days</h2>";
        echo "<p>Background color is " . ($days % 2 == 0 ? "Blue" : "Red") . "</p>";
    }
    ?>
</body>
</html>
