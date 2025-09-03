<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>
    <h2>Validate Email Address</h2>

    <form method="POST" action="">
        Enter Email: <input type="text" name="email" required>
        <button type="submit" name="validate">VALIDATE</button>
    </form>

    <?php
    if(isset($_POST['validate'])){
        $email = $_POST['email'];

        // Regular expression for email validation
        $pattern = "/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/";

        if(preg_match($pattern, $email)){
            echo "<p style='color:green;'>✅ $email is a valid email address!</p>";
        } else {
            echo "<p style='color:red;'>❌ '$email' is NOT a valid email address!</p>";
        }
    }
    ?>
</body>
</html>
