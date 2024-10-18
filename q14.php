<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
    <label for="url">Enter URL:</label>
    <input type="url" name="url" id="url" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['url'])) {
    $url = $_POST['url'];

    if (filter_var($url, FILTER_VALIDATE_URL)) {
        $all_lines = @file($url); // Use '@' to suppress warnings if the file cannot be read

        if ($all_lines !== false) {
            foreach ($all_lines as $line_num => $line) {
                echo "Line No.-{$line_num}: " . htmlspecialchars($line) . "<br>";
            }
        } else {
            echo "Unable to read the content from the URL.";
        }
    } else {
        echo "Invalid URL.";
    }
}
?>

</body>
</html>
