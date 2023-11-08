<?php

ini_set('display_errors', 1);

$globalId = 0;

class IPhone
{
    private $model;
    private $color = black;

    public function __construct(private $owner, private $battery = 0)
    {
        global $globalId;
        $globalId++;
        $this->model = $globalId;
        
    }


public function getOwner()
{
    return $this->owner;
}

public function getmodel()
{
    return $this->model;
}
public function getBattery()
{
    return $this->battery;
}
private function setBattery($battery)
{
    $this->battery = $battery;
}
public function battery($percent)
{
    $this->setBattery($this->getBattery() + $percent);
}
}

$phone1 = new IPhone("zak", 12);
echo "phone1 owner: ", $phone1-> getmodel(), " owner", $phone1->getOwner();
echo "<br>";

$phone1->battery(100);
echo "battery: ", $phone1->getBattery();
echo "<br>";
?>