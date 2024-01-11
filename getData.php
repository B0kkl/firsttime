<?php
$data = [
    ['percentage' => 50],
    ['percentage' => 30],
    ['percentage' => 70],
    // Add more data points as needed
];

header('Content-Type: application/json');
echo json_encode($data);
?>
