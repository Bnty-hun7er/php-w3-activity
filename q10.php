<?php

if (!empty($_SERVER['HTTPS'])) {
    echo 'https is enabled';
} else {
    echo 'https is not enabled';
}

?>