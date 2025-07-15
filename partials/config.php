<?php
// Auto-detect protocol
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https://' : 'http://';

// Detect host and folder
$host = $_SERVER['HTTP_HOST'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);

// Remove /src only if not on localhost
if ($host !== 'localhost' && strpos($scriptDir, '/src') !== false) {
    $scriptDir = str_replace('/src', '', $scriptDir);
}

define('BASE_URL', rtrim($protocol . $host . $scriptDir, '/') . '/');
?>