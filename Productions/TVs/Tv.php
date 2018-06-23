<?php 
namespace Productions\TVs;

use Productions\Superclass\Goods;
use Productions\Interfaces\OnOff;

Class Tv extends Goods implements OnOff
{
    public function setBrand($brand)
    {
        $this->brand = $brand;
        return $this;
    }
    public function setSize($size)
    {
        $this->size = $size;
        return $this;
    }
    public function setTechnology($technology)
    {
        $this->technology = $technology;
        return $this;
    }
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }
    public  function changeColor($color)
    {
        $this->color = $color;
    }

    public  function changeSize($screenSize)
    {
        $this->screenSize = $screenSize;
    }
    public function getDescription()
    {
        echo "<td><b>Марка:</b> {$this->brand} <b>Матрица:</b>{$this->technology} <b>Диагональ:</b>{$this->technology} <b>Цвет:</b>{$this->color}</td>";    
    }
    public function On()
    {
        echo "watch TV!<br>";
    }
    public function Off()
    {
        echo "See you soon!<br>";
    }
}
?>