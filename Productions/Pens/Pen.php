<?php 
namespace Productions\Pens;

use Productions\Superclass\Goods;
use Productions\Interfaces\HowToWrite;

Class Pen extends Goods implements HowToWrite
{
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }
    public function setColor($paintColor)
    {
        $this->paintColor = $paintColor;
        return $this;
    }
    public function setThickness($inkThickness)
    {
        $this->inkThickness = $inkThickness;
        return $this;
    }
    public  function changePaint($paintColor)
    {
        $this->paintColor = $paintColor;
    }
    public function getDescription()
    {
        echo "<td><b>Марка:</b> {$this->brand}<b> Цвет:</b>{$this->paintColor} <b>Толщина:</b>{$this->inkThickness}</td>";    
    }
    public function write()
    {
        echo "Hello World!<br>";
    }  
}
 ?>