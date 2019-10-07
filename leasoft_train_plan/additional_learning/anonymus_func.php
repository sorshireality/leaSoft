<?php

        $func = function()
        {
           echo (new class()
           {
             protected $weight = 69;
             public function showMe(): string
             {
                 return "Look, u have ".$this->weight."kg and it's all :)<br>";
             }
           })->showMe();
        };
$func();

        class vehicle{
            protected $tires;
            protected $motor;
            public function __construct()
            {
                $this->tires = "20\"";
                $this->motor = "fuel";
            }

            public function testing()
            {
                return function ()
                {
                  var_dump($this->motor,$this->tires);
                };
            }
        }
$new_object = new vehicle();
        $func = $new_object->testing();
        $func();
?>
