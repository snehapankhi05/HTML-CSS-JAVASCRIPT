<?php
$result = ""; // default
if(isset($_POST['check'])){
    $number = $_POST['number'];
    if($number % 2 == 0){
        $result = "$number is Even";
    } else {
        $result = "$number is Odd";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Check</title>
</head>
<body>
    <h2>Check Even or Odd Number</h2>
    <form method="POST" action="">
        Enter a number: <input type="number" name="number" required>
        <button type="submit" name="check">Check</button>
    </form>

    <?php
    if($result != ""){
        echo "<h3>$result</h3>";
    }
    ?>
</body>
</html>


