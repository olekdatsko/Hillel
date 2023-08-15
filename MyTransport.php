<?php
class MyTransport{
    protected $name;
    protected $speed;

    public function __construct($name,$speed){
        $this->name=$name;
        $this->speed=$speed;
    }
    public function getName(){
        return $this->name;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function getInfo(){
        return"Transport: {$this->name}, Speed: {$this->speed} km/h";
    }
}
class Cars extends MyTransport{
    private $numDoors;
    public function __construct($name, $speed, $numDoors)
    {
        parent::__construct($name, $speed);
        $this->numDoors=$numDoors;
    }

    public function getNumDoors(){
        return $this->numDoors;
    }
    public function carWorker(){
        return "{$this->name}  working now!";
    }
    public function getInfo()
    {
        return parent::getInfo() . ", Door numbers: {$this->numDoors}";
    }
}
class MotoCycle extends MyTransport{
    private $numGears;
    public function __construct($name, $speed, $numGears)
    {
        parent::__construct($name, $speed);
        $this->numGears=$numGears;
    }
    public function getNumGears(){
        return $this->numGears;
    }
    public function motoCyjleWorker(){
        return "{$this->name}  working now!";
    }
    public function getInfo()
    {
        return parent::getInfo() . ", Gear numbers: {$this->numGears}";
    }
}

class Boats extends myTransport{
    private $boatType;
    public function __construct($name, $speed, $boatType)
    {
        parent::__construct($name, $speed);
        $this->boatType=$boatType;
    }
    public function getBoatType(){
        return $this->boatType;
    }
    public function  boatWorker(){
        return "{$this->boatType} working now!";
    }
    public function getInfo()
    {
        return parent::getInfo() . ", Boat Type: {$this->boatType}";
    }
}
function echoMyTransportInformation($myTransportsArray){
    foreach ($myTransportsArray as $transport){
        echo $transport->getInfo() . "\n";
    }
}

$car = new Cars("Audi", 250,2);
$motoCykle = new MotoCycle("Ducati",320,2);
$boat = new Boats("Wicroria",123,"Submarine");

$myTransports = [$car, $motoCykle, $boat];

echoMyTransportInformation($myTransports);
