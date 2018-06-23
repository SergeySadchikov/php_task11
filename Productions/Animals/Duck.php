<?php 
namespace Productions\Animals;

use Productions\Superclass\Goods;
use Productions\Interfaces\Areal;

Class Duck extends Goods implements Areal
{
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    public function setGenus($genus)
    {
        $this->genus = $genus;
    }
    public function getAreal()
    {
        switch ($this->genus) {
            case 'Anatinae':
                return $this->areal = 'South America';
                echo "$this->areal<br>";
                break;
            case 'Dendrocygninae':
                return $this->areal = 'Asia';
                echo "$this->areal<br>";
                break;
            case 'Stictonettinae':
                return $this->areal = 'Australia';
                echo "$this->areal<br>"; 
                break;
            case 'Tadorninae':
                return $this->areal = 'Africa';
                echo "$this->areal<br>"; 
                break;
            }    
    }
    public function getDescription()
    {
        echo "<td><b>Род:</b> {$this->genus} <b>Возраст:</b>{$this->age} <b>Пол:</b>{$this->gender} <b>Ареал:</b>{$this->getAreal()}</td>";    
    }
}
?>
