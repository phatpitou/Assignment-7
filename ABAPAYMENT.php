<?php
    require_once(__DIR__ . '/paymentmethod.php');
    class aba //extends paymentmethod
    {
        protected $item;
        protected $price;
        protected $quantity;
        
        public function __construct($item, $price, $quantity)
        {
            $this->item = $item;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        public function getItem()
        {
            return $this->item;
        }

        public function getTotal()
        {
            return $this->price * $this->quantity;
        }
    }


?>