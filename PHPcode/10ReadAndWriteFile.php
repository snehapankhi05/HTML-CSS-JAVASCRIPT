<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
$filename = "myfile.txt";

// ---------- WRITE TO FILE ----------
if ($file = fopen($filename, "w")) {
    fwrite($file, "Hello Sneha ❤️ This is my first file writing and reading in PHP!\n");
    fclose($file);
    echo "✅ File written successfully!<br>";
} else {
    echo "❌ Unable to open file for writing.<br>";
}

// ---------- READ FROM FILE ----------
if (file_exists($filename)) {
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    fclose($file);
    echo "📖 File Content: <b>$content</b>";
} else {
    echo "❌ File not found!";
}
?>
