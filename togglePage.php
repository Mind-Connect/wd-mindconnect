<?php

$statusFile = 'pageStatus.txt';
$currentStatus = trim(file_get_contents($statusFile));
$newStatus = ($currentStatus === 'live') ? 'blocked' : 'live';

file_put_contents($statusFile, $newStatus);

header('Content-Type: application/json');
echo json_encode(['newStatus' => $newStatus]);