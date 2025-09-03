<!DOCTYPE html>
<html>
<head>
    <title>Leap Year Checker</title>
</head>
<body>
    <form method="post">
        Enter a year: <input type="text" name="year">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    // Check if the form was submitted
    if (isset($_POST['submit'])) {
        $year = $_POST['year'];

        // Validate input
        if (!is_numeric($year)) {
            echo "❌ Invalid input. Please enter a numeric year.";
        } else {
            $year = (int)$year;

            // Leap year logic
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo "✅ $year is a leap year.";
            } else {
                echo "❌ $year is not a leap year.";
            }
        }
    }
    ?>
</body>
</html>

