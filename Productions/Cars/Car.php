<?php
namespace Productions\Cars;

use Productions\Superclass\Goods;
use Productions\Interfaces\Go;

Class Car extends Goods implements Go
{  
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;            
    }
    public function setColor($color) 
    {
        $this->color = $color;
        return $this; 
    }
    public function setType($type)
    {
        $this->type = $type;
        return $this; 
    }
    public function setTransmission($transmission)
    {
        $this->transmission = $transmission;
        return $this; 
    }
    public function setWheelsize($wheelsize)
    {
        $this->wheelsize = $wheelsize;
        return $this; 
    }
    public function changeType($type)
    {
        $this->type = $type;
    }
    public function getDescription()
    {
        echo "<td><b>Марка:</b> {$this->brand} <b>Цвет:</b>{$this->color} <b>Кузов:</b>{$this->type} <b>Коробка:</b>{$this->transmission}  <b>Колеса:</b>{$this->wheelsize}</td>";    
    }
     public function drive() 
    {
        echo "Step on a gas!<br>";
    }
    public function brake() 
    {
        echo "Step on a brake!<br>";
    }
    public function park()
    {
        echo "go to parking!<br>";
    }
}
?>