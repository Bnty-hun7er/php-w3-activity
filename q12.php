<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emailChecker</title>
</head>
<body>

<form action="q11.php" method="post">
    <label for="email">Enter your email:</label>
    <input type="email" name="email" id="email">
    <input type="submit" value="Submit">
    
</body>


<?php

$email = $_POST['email'];


echo "<br>" ;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email is valid";
} else {
    echo "Email is not valid";
}


?>
</html>