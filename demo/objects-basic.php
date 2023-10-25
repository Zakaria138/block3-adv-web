<?php

ini_set("display_error",1);

class iphone
{
    public $model;
    public $battery;
}

$phone = new iphone();

$phone->model = 1;
$phone->battery = 100;

echo  $phone->model;
?>