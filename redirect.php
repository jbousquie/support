<?php
    $u = $_GET['u'];
    $URL = [
        'p' => "https://www.paypal.com/donate/?hosted_button_id=9AWKWZEEJQ898",
        'c' => "https://www.buymeacoffee.com/jbousquie"
    ];  
    $header_location = 'Location: ' . $URL[$u];
    header($header_location);
?>