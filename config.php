<?php
$cnt = 0;
$products = array(
	array(
		"title" => "101",
		"price" => 150.00,
		"image" =>  "football"
	),
	array(
		"title" => "102",
		"price" => 120.00,
		"image" =>  "tennis"
	),
	array(
		"title" => "103",
		"price" => 90.00,
		"image" => "basketball"
	),
	array(
		"title" => "104",
		"price" => 110.00,
		"image" =>  "table-tennis"
	),
	array(
		"title" => "105",
		"price" => 80.00,
		"image" =>  "soccer"
	)
); //productarray
$img = '';
global $cart;
$cart = array(
	'prodname' => "initial",
	'price' => "0",
	'quantity' => "0",
	'netprice' => "0"
); //productarray
foreach ($products as $serialkey => $serialvalue) {

	$img = '<img name="image" src="images/' . $serialvalue['image'] . '.png">'; //getting image from array

	//$show .= '<form action="?" method="POST" enctype="multipart/form-data">';

	$show .= '<div class="product">
	' . $img . '
	<h3 class="title" ><a href="#" name="title" >' . $serialvalue['title'] . '</a></h3>
	<span name="price">'. "$". $serialvalue['price'] . '</span>

	<form id="form1" action="" method="POST"> 
	<input id="get_prodtitle" type="text" name="get_prodtitle" value="'.$serialvalue['title'].'">  
	<input id="get_prodprice" type="text" name="get_prodprice" value="'.$serialvalue['price'].'">  
	<p><input  class="add-to-cart" type="submit" name="add-to-cart" value="Add To Cart"></p>
	</div>
	</form>';

	//$show .= ' </form>';
}
session_start();

$_SESSION['basket'][0] = array(
	'prodname' => "initial",
	'price' => "0",
	'quantity' => "0",
	'netprice' => "0"
);
?>