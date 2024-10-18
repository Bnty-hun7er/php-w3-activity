<?php
// Define a text string
$text = 'PHP Tutorial';

// Use a regular expression to replace the first letter of each word with a span element with red color
$text = preg_replace('/(\b[a-z])/i', '\1', $text);

// Display the modified text with styled first letters
echo $text;
?>
