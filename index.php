<?php 
require_once 'autoloader.php';
session_start();

use \Productions\Buy\Cart;
use \Productions\Cars\Car;
use \Productions\Animals\Duck;
use \Productions\Foods\Food;
use \Productions\Pens\Pen;
use \Productions\TVs\Tv;

$basket = new Cart();
if (!empty($_GET['product'])) {
	$basket->addToCart();
}
if (isset($_GET['delete'])) {
	$basket->remove();
}

$car1 = new Car('Автомобиль', 1000, 900);
$car1->setBrand('Volga');
$car1->setColor('Черный');
$car1->setType('Седан');
$car1->setTransmission('MT');
$car1->setWheelsize('19');

$duck1 = new Duck('Утка', 100, 3);
$duck1->setAge(1);
$duck1->setGender('male');
$duck1->setGenus('Dendrocygninae');
 
$food = new Food('Еда', 10, 3);
$food->setName('Картофель');

$pencil = new Pen('Ручка', 5, 1);
$pencil->setBrand('Parker');
$pencil->setColor('Blue');
$pencil->setThickness(0.05);

$tv = new Tv('Телевизор', 700, 50);
$tv->setBrand('LG');
$tv->setColor('black');
$tv->setTechnology('LCD');
$tv->setSize('50');

$products = [$car1, $duck1, $food, $pencil, $tv ];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Мой первый магазин</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
</head>
<body>
	<h3>Пространства имен</h2>
	<p>В PHP у вас не может быть два класса, названных одинаково, все они должны быть уникальны. Пространства имен позволяют нам обойти эту проблему, и мы можем создать столько классов, сколько нам понадобится.</p>
	<h3>Иcключения</h2>
	<p>Исключения — это гибкий, расширяемый метод обработки ошибок.</p>
	<h3>Сейчас в наличии</h3>
	<div style="margin-left: 10px"><a href="list.php?action=getorder">Товаров в корзине: <?php $basket->getCount() ?></a></div>
	<table class='table'>
		<tr>
			<th>Категория товара</th>
			<th>Описание товара</th>
			<th>Цена</th>
			<th>Стоимость доставки</th>
			<th>Корзина</th>
		</tr>
			<?php foreach ($products as $key => $product) :?>
			 	<tr>
			 		<?php $product->getFullDescription(); ?>
			 		<td>
			 			<?php if ($basket->getSuccess($product->title)) { ?>
			 				<a href="index.php?product=<?php echo ($product->title); ?>&price=<?php echo (substr(($product->getPrice()),-3,3)); ?>&delivery=<?php echo ($product->getDelivery()); ?>">Добавить в корзину</a>
			 			<?php } else { ?>
			 				<a href="index.php?delete=<?php echo ($product->title); ?>">Убрать из корзины</a>
			 			<?php } ?>
			 		</td>
			 	</tr>
			 <?php endforeach; ?>
	</table>
</body>
</html>
<!-- <?php 
echo "<pre>";
print_r($_SESSION['cart']);
 ?> -->