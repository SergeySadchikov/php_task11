<?php
namespace Productions\Buy;
use \Productions\Exceptions\EmptyCartException;

Class Order
{
	public $sum = [];
	public function getList()
	{
		try {	
			if (!empty($_SESSION['cart']) && !empty($_GET['action'])) {
				foreach ($_SESSION['cart'] as $choice) {
						echo "<tr>";
						echo "<td>".$choice[0]."</td>";
						echo "<td>".$choice[1]."</td>";
						echo "<td>".$choice[2]."</td>";
						echo "<td>".($choice[1] + $choice[2])."</td>";
						echo "</tr>";
				} 
			} else {
				throw new EmptyCartException();
			}
		} 
			catch (EmptyCartException $e) {
				echo '<h4>Товары в корзине отсутсвуют</h4>';
			}
	}

	public function totalPrice()
	{
		if (isset($_SESSION['cart']) && !empty($_GET['action'])) {
				foreach ($_SESSION['cart'] as $choice) {
					$this->sum[] = $choice[1] + $choice[2]; 
				}
			}
		echo (array_sum($this->sum))." руб.";
	}

	public function clearOrder()
	{
		unset($_SESSION['cart']);
		session_destroy();
		header('Location:index.php');
	}
}

 ?>