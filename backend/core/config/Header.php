<?php
namespace core\config;

use core\config\Variables;

class Header {
  public static function apply() {
    header("Access-Control-Allow-Origin: " . Variables::ALLOWED_ORIGIN());
    header("Access-Control-Allow-Headers: Content-Type, Authorization");
    header("Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS, DELETE");
    header("Access-Control-Allow-Credentials: true");
    header('Content-Type: application/json');

    if($_SERVER['REQUEST_METHOD'] === 'OPTIONS'){
      http_response_code(200);
      exit;
    }
  }
}
