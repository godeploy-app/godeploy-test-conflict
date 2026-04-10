<?php
// Application configuration — v1.2.0 (remote update)
define('APP_NAME', 'GoDeploy Test');
define('APP_VERSION', '1.3.0');
define('APP_ENV', 'production');
define('DB_HOST', 'db-cluster.internal');
define('DB_NAME', 'myapp');
define('DB_USER', 'appuser');
define('DB_PASS', 'secret123');
define('CACHE_DRIVER', 'redis');
define('CACHE_TTL', 7200);
define('DEBUG_MODE', false);  // keep off in prod
define('API_VERSION', 'v3');
define('RATE_LIMIT', 500);
