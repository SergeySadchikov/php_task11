<?php
namespace Productions\Buy;

CLass Cart
{	
	public function addToCart()
	{
		if (!isset($_SESSION['cart'])) {
			$_SESSION['cart'] = array();
		}
		if (!empty($_GET['product'] && $_GET['price'] && $_GET['delivery'])) {
			if (isset($_SESSION['cart']) && array_search($_GET['product'], array_column($_SESSION['cart'], 0)) === false) {
				$_SESSION['cart'][] = [$_GET['product'], $_GET['price'], $_GET['delivery']];
				header('Location: index.php'); 
			} 
		}
	}
	public  function remove()
	{	if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $key => $value) {
				if ($value[0] === $_GET['delete']) {
					unset ($_SESSION['cart'][$key]);
					sort($_SESSION['cart']);
				}
			}
		}
	}		
	
	public function getCount()
	{
		if (isset($_SESSION['cart'])) {
			echo (count($_SESSION['cart']));
		} else {
			echo '0';
		}
	}	

	public function getSuccess($item) {
		if (empty($_SESSION['cart']) or array_search($item, array_column($_SESSION['cart'], 0)) === false) {
			return true;
		}
			return false;
	}
}	
 ?>