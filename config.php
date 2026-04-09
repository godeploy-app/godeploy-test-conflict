<?php
// Application configuration — v1.1.0
define('APP_NAME', 'GoDeploy Test');
define('APP_VERSION', '1.1.0');
define('APP_ENV', 'production');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'myapp');
define('DB_USER', 'appuser');
define('DB_PASS', 'prod_secure_pw!');
define('CACHE_DRIVER', 'redis');
define('CACHE_TTL', 3600);
define('DEBUG_MODE', true);
define('API_VERSION', 'v2');
define('RATE_LIMIT', 100);