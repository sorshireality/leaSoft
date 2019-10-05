<?php
#Simple Factory
    interface Button{
        public function getColor(): string;
    }
    class WinButton implements Button
    {
    protected $color;
        public function __construct(string $color)
        {
$this->color = $color;
        }
        public function getColor(): string
        {
            return $this->color;
        }
    }
    class ButtonFactory
    {
        public static function CreateButton($color): Button
        {
            return new WinButton($color);
        }
    }
    $btn = ButtonFactory::CreateButton('blue');
    echo "Color = ".$btn->getColor();
?>