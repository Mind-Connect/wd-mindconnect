<?php
$statusFile = __DIR__ . '/pageStatus.txt'; 
$status = 'live';

if (file_exists($statusFile)) {
    $status = trim(file_get_contents($statusFile));
}

if ($status === 'blocked') {
    http_response_code(503); 
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site Unavailable</title>
    <style>
        body { text-align: center; padding: 50px; font-family: sans-serif; }
        h1 { font-size: 3em; }
    </style>
</head>
<body>
    <h1>Our Site is Currently Unavailable</h1>
    <p>Please check back again shortly.</p>
</body>
</html>
HTML;
    die(); 
}
?>