
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit name </title>
</head>
<body>

<form action="q4.php" method="post">
    <label for="name">Enter your name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Submit">
</form>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    echo "Hello, $name!";
}
?>
    
</body>
</html>