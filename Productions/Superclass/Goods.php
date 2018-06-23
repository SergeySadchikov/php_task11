<?php 
namespace Productions\Superclass;
 
abstract Class Goods {
    public $price;
    public $discount;
    public $delivery = 250;
    public $weight;
    public function __construct($title, $price, $weight) 
    {
        $this->price = $price;
        $this->title = $title;
        $this->weight = $weight;
    }
    public function getPrice()
    {
        if ($this->weight > 10) {
            $this->discount = 0.1;
            return "С учетом скидки: ".round($this->price - ($this->price) * $this->discount);
        } else {    
            $this->discount = 0;
            return $this->price;
        }    
    }
    public function getDelivery()
    {
        if ($this->discount == 0.1) {
            return ($this->delivery + 50);
        } else {
            return $this->delivery;
        }
    }
    public function getFullDescription()
    {
        echo "<td>{$this->title}</td>";
        $this->getDescription();
        echo "<td>{$this->getPrice()}</td>";
        echo "<td>{$this->getDelivery()}</td>";
    }
    abstract public function getDescription();
}

?>