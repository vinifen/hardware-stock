<?php
require_once __DIR__ . '/vendor/autoload.php';

use core\config\Header;
use core\library\Router;
use core\library\ContainerDI;
use core\config\Variables;
ini_set('error_log',  base_path() . '/php-error.log');

echo "DB_HOST: " . \core\config\Variables::DB_HOST() . "\n";
echo "DB_USER: " . \core\config\Variables::DB_USER() . "\n";
echo "DB_PASSWORD: " . \core\config\Variables::DB_PASSWORD() . "\n";
echo "DB_NAME: " . \core\config\Variables::DB_NAME() . "\n";
echo "DB_PORT: " . \core\config\Variables::DB_PORT() . "\n";
echo "ALLOWED_ORIGIN: " . \core\config\Variables::ALLOWED_ORIGIN() . "\n";
echo "JWT_SESSION_KEY: " . \core\config\Variables::JWT_SESSION_KEY() . "\n";
echo "JWT_REFRESH_KEY: " . \core\config\Variables::JWT_REFRESH_KEY() . "\n";
echo "cookie_http_only: " . \core\config\Variables::cookie_http_only() ? 'true' : 'false' . "\n";
echo "cookie_secure: " . \core\config\Variables::cookie_secure() ? 'true' : 'false' . "\n";

Header::apply();
$containerDI = new ContainerDI();
$router = new Router($containerDI->build());
$router->run();









