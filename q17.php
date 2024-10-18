<?php
// Output the current PHP version
echo 'Current PHP version : ' . phpversion();

// Output the version of the Tidy extension, or nothing if the extension isn't enabled
echo phpversion('tidy')."\n";
?>
