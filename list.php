<?php 
require_once 'autoloader.php';
session_start();

use Productions\Buy\Order;
$order = new Order;

if($_GET['action'] == 'clear') {
	$order->clearOrder();
}
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ваш заказ</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 	
 </head>
 <body>
 	<table class='table'>
 		<tr>
	 		<th>Наименование товара</th>
	 		<th>Цена</th>
	 		<th>Доставка</th>
	 		<th>Итого</th>
	 	</tr>
	 		<?php $order->getList(); ?>
 		<tr>
 			<th>Cумма закакза: <?php $order->totalPrice(); ?></th>
 		</tr>
 	</table>
     <div class="row" style="width:200px;background-color:#ccc;text-align: center;"><a href="list.php?action=clear">Очистить корзину</a></div>
    <div class="row" style="width:200px;background-color:#ccc;text-align: center;"><a href="index.php">На главную</a></div>
 </body>
 </html>
