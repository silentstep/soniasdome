<?php
#error_reporting(E_ALL);
#ini_set("display_errors", 1);

$GLOBALS["config"] = array (
  "appName" => "phpFramework",
  "version" => "0.0.1",
  "domain" => "soniasdome.dk",
  "path" => array (
    "app" => "app/",
    "core" => "core/",
    "session" => "tmp",#"app/sessions",
    "basePath" => "/var/www/html/",#"/var/www/html/simplePHPfw",
    "index" => "index.php"
  ),
  "defaults" => array (
    "controller" => "main",
    "method" => "index"
  ),
  "routes" => array (),
  "database" => array (
    "host" => "localhost",
    "username" => "phpframe",
    "password" => "9mC8j0VWBdjcj7ia",
    "name" => "phpframe"
  )
);
date_default_timezone_set("Europe/Sofia");
$GLOBALS["instances"] = array();
require_once $GLOBALS["config"]["path"]["core"]."autoload.php";
new router();
?>
