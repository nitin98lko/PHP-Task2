<?php
include_once 'config.php';
include 'header.php';
$image = "";
$title = "";
$qty = "";
$netprice = "";

unset($_SESSION['basket'][0]);

/////////////////////////////////////////////adding to cart/////////////////////////////////

if (isset($_POST["add-to-cart"])) {

	echo $set_prodtitle = $_POST['get_prodtitle'];
	echo $set_prodprice = $_POST['get_prodprice'];

	$item = array(
		'prodname' => $set_prodtitle,
		'price' => $set_prodprice,
		'quantity' => 1,
		'netprice' => 1
	);

	array_push($_SESSION['basket'], $item);
	unset($_SESSION['basket'][0]); //removiong default entries at index 0
// global $cart;
// array_push($cart[0], $item);
} //foreach

/////////////////////////////////////showing table////////////////////////////////////////////
include 'function.php';

////////////////////////////////////deleting from cart session///////////////////////////////////
if (isset($_POST['delete'])) {
	$getid = $_POST['id'];
	unset($_SESSION['basket'][0]);
	unset($_SESSION['basket'][$getid]);
	include 'function.php';
}

/////////////////////////////////////////////////update the cart///////////////////////////////////////////////////
if (isset($_POST['edit'])) {
	$getid = $_POST['id'];
	$getname = $_POST['get_cartname'];
	$getprice = $_POST['get_cartprice'];
	echo $getquantity = $_POST['get_cartquantity'];
	echo $getnetprice = $getquantity * $getprice;
	include 'function.php';	
}
if (isset($_POST['update'])) {
	echo"setid=".$setid = $_POST['getid'];
	echo"setqty=".$setqty = $_POST['getquantity'];
	$_SESSION['basket'][$setid]['quantity']=$setqty;
	// $_SESSION['basket'][$getid]['prodname']=$setid;
	// $_SESSION['basket'][$getid]['price']=$setqty;
	// $_SESSION['basket'][$getid]['quantity']=$setqty;
	// $_SESSION['basket'][$getid]['netprice']=$setqty;
	include 'function.php';
}

// /////////////////////total price /////////////////////
// $amt = 0;
// foreach ($_SESSION['basket'] as $basketkey => $basketvalue) {
// 	$amt = $amt + $cart[$basketkey]['netprice'];
// }
// unset($_SESSION['basket'][0]);
//session_destroy();

?>

<div id="main">
	<div id="products">
		<form id="form2" action="" method="POST">
			<p>prodname<?php echo $getname ?></p>
			<p>prodprice<?php echo $getprice ?></p>
			<p>
				<label for="quantity">Quantity: <input type="text" name="getquantity" value="<?php echo $getquantity ?>" required></label>
			</p>

			<input type="text" name="getid" value="<?php echo $getid ?>">

			<p>
				<input type="submit" name="update" value="update">
			</p>
		</form>
	</div>
</div>

<div id="main">
	<div id="products">
		<?php
		echo $html_table;
		//echo "Tatal cart value:	$" . $amt;
		?>
	</div>
</div>

<!-- product -->
<div id="main">
	<div id="products">
		<?php
		echo $show;
		?>
	</div>
</div>
<!-- footer -->
<?php
include 'footer.php';
//session_destroy();
echo '<pre>';
print_r(($_SESSION['basket']));
//print_r($_POST);
// print_r($cart);
echo '<pre>';
?>