<?php 
namespace Productions\Foods;

use Productions\Superclass\Goods as Goods;

Class Food extends Goods
{	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	public function getDescription()
    {
        echo "<td><b>Наименование:</b> {$this->name} <b>Вес:</b>{$this->weight} кг</td>";    
    }
}

 ?>