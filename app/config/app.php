<?php
error_reporting(E_ALL);
ini_set("display_errors","On");		  ini_set("display_errors","On");
ini_set("display_startup_errors","On");		  ini_set("display_startup_errors","On");
require __DIR__.'/../providers.php';
require __DIR__.'/../routes.php';

$app['debug'] = true;

// Setting Database connections
$capsule->addConnection([
  "driver"     => "mysql",
  "host"       => "localhost",
  "database"   => "taakin",
  "username"   => "root",
  "password"   => "gjpv",
  "charset"    => "utf8",
  "collation"  => "utf8_general_ci"
]);

$capsule->bootEloquent();

return $app;
?>
