<?php
#Prototype
class Macbutton
{
    protected $color;
    protected $mission;
    protected $abs = array(1 => '1', 2 => '2');
    public function __construct($color = "white", $mission = "close")
    {
        $this->color = $color;
        $this->mission = $mission;
    }
    public function __clone()
    {
        $this->color = "Copied button with color : ".$this->color;
        $this->mission = "default";
    }
    public function addAbs($value)
    {
        array_push($this->abs,$value);
    }
    public function getValues()
    {
        echo "Color : ".self::getColor().". Mission : ".self::getMission()." <br> ";
        print_r(self::getAbs());
        echo "<br>";
    }
    private final function getColor()
    {
        return $this->color;
    }
    private final function getMission()
    {
        return $this->mission;
    }
    private final function getAbs()
    {
        return $this->abs;
    }
}
function ClientTODOlist()
{
    echo "Start program there<br>";
    $macbat = new Macbutton("red","add");
    $macbat->addAbs(3);
    echo "Now we try to clone element <br>";
    $clonedmacbat = clone $macbat;
    $clonedmacbat->addAbs(4);
    $macbat->getValues();
    $clonedmacbat->getValues();
    echo "End program succesfull<br>";
}
ClientTODOlist();

?>