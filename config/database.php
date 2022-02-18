<?php

declare(strict_types=1);

$database_config =[
  "driver"=>"mysql",
  "host"=>"127.0.0.1",
  "database"=>"db",
  "username"=>"db",
  "password"=>"secret",
  "charset"=>"utf8",
  "collation"=>"utf8_unicode_ci",
  "prefix"=>""
];


//Load Laravel Eloquent for easier DB calls.
$capsule =new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($database_config);
$capsule->setAsGlobal();
$capsule->bootEloquent();

return $capsule;