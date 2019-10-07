<?php

    class Bounty
    {
        protected $price = 200;

        public function accelerate()
        {
            return new class($this->price) extends Bounty
            {
                private $temp;

                public function __construct($price){
                    $this->temp = $price + 50;
                }

                public function payout(): string
                {
                    return "You got a salary amout : " . $this->temp . "$.";
                }
            };
        }
    }
    $object = new Bounty();
    print ($object->accelerate()->payout());

    ?>