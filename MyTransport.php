<?

class MyTransport
{
    protected string $name;
    protected int $speed;

    public function __construct(string $name, int $speed)
    {
        $this->name = $name;
        $this->speed = $speed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function getInfo(): string
    {
        return "Transport: {$this->name}, Speed: {$this->speed} km/h";
    }
}

class Cars extends MyTransport
{
    private int $numDoors;

    public function __construct(string $name, int $speed, int $numDoors)
    {
        parent::__construct($name, $speed);
        $this->numDoors = $numDoors;
    }

    public function getNumDoors(): int
    {
        return $this->numDoors;
    }

    public function carWorker(): string
    {
        return "{$this->name} is working now!";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Door numbers: {$this->numDoors}";
    }
}

class MotoCycle extends MyTransport
{
    private int $numGears;

    public function __construct(string $name, int $speed, int $numGears)
    {
        parent::__construct($name, $speed);
        $this->numGears = $numGears;
    }

    public function getNumGears(): int
    {
        return $this->numGears;
    }

    public function motoCycleWorker(): string
    {
        return "{$this->name} is working now!";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Gear numbers: {$this->numGears}";
    }
}

class Boats extends MyTransport
{
    private string $boatType;

    public function __construct(string $name, int $speed, string $boatType)
    {
        parent::__construct($name, $speed);
        $this->boatType = $boatType;
    }

    public function getBoatType(): string
    {
        return $this->boatType;
    }

    public function boatWorker(): string
    {
        return "{$this->boatType} is working now!";
    }

    public function getInfo(): string
    {
        return parent::getInfo() . ", Boat Type: {$this->boatType}";
    }
}

function echoMyTransportInformation(array $myTransportsArray): void
{
    foreach ($myTransportsArray as $transport) {
        echo $transport->getInfo() . "\n";
    }
}

$car = new Cars("Audi", 250, 2);
$motoCycle = new MotoCycle("Ducati", 320, 2);
$boat = new Boats("Wicroria", 123, "Submarine");

$myTransports = [$car, $motoCycle, $boat];

echoMyTransportInformation($myTransports);
