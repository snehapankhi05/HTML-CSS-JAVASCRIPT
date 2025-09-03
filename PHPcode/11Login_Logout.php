<?php
session_start();

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    echo "<p>You are logged out.</p>";
}

// Agar login hai to welcome msg show karo
if (isset($_SESSION['username'])) {
    echo "<h2>Welcome, " . $_SESSION['username'] . "!</h2>";
    echo "<a href='?logout=true'>Logout</a>";
} else {
    // Login check
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Simple hardcoded username-password
        if ($username == "user" && $password == "123") {
            $_SESSION['username'] = $username;
            echo "<h2>Welcome, " . $username . "!</h2>";
            echo "<a href='?logout=true'>Logout</a>";
            exit();
        } else {
            echo "<p style='color:red;'>Invalid username or password</p>";
        }
    }

    // Login form
    ?>
    <h2>Login</h2>
    <form method="post" action="">
        Username: <input type="text" name="username" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
}
?>
