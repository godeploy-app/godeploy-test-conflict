<?php
// API router — v2
header('Content-Type: application/json');
echo json_encode(['version' => 'v2', 'status' => 'ok']);
