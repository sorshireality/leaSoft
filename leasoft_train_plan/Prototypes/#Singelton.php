<?php
#Singelton
final class Waterfall
{
    private static $instance;
    protected $file;
    protected $checker;


    private function __construct()
    {
        $this->file = fopen("EuropeAhol.txt" ,"r+");
        $this->checker = rand(100);
    }
    public final function getCheck()
    {
        return $this->checker;
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
    public static function getInstance(): Waterfall
    {
        if (!self::$instance)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __destruct()
    {
    echo "Empover destruction eath ser";
    }
}
$waterfall1 = Waterfall::getInstance();
$waterfall2 = Waterfall::getInstance();
if ($waterfall2->getCheck()==$waterfall1->getCheck()) echo "OK"; else echo "Error";


?>