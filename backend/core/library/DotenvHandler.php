<?php
namespace core\library;

use Dotenv\Dotenv;
use Exception;

class DotenvHandler
{
  static function loadDotEnv()
  {
    $path = dirname(__DIR__, 2);
    $envFile = $path . '/.env';

    self::checkDotenv($envFile);

    $dotenv = Dotenv::createImmutable($path);
    $dotenv->load();
  }

  private static function checkDotenv($dotenvFile){
    if (!file_exists($dotenvFile)) {
      throw new Exception(self::dotEnvErrorMessage());
    }
  } 

  private static function dotEnvErrorMessage()
  {
    return '
    ========================================================
      [ALERT:] .env file is missing!
      
      For improved security and to prevent potential errors, 
      please create a .env file in the root of the project with
      the following variables (example values are provided):

      DB_HOST=localhost
      DB_USER=postgres
      DB_PASSWORD=abc321
      DB_NAME=hardware_stock
      DB_PORT=5432

      ALLOWED_ORIGIN=http://localhost:4200

      JWT_SESSION_KEY=yourjwtsessiontokenkey;
      JWT_REFRESH_KEY=yourjwtrefreshtokenkey;

      Without the .env file, the application will use default 
      values, which may cause unexpected behavior and errors.
        
    ========================================================
    ';
  }
}
