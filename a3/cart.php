<?php
session_start();
require_once ('tools.php');

start("Cart Page");

if (isset($_POST['id'], $_POST['qty'], $_POST['option']) && is_numeric($_POST['qty']) && $_POST['qty'] >= 1 && check($_POST['id']) && check2(check($_POST['id']) , $_POST['id'], $_POST['option']))
	{
	$_SESSION['cart'][$_POST['id']][$_POST['option']] = $_POST['qty'];
	}
elseif (isset($_SESSION['cart']))
	{
	}
  else
	{
	header("Location: product.php");
	}

?>

<script src='../slideshow.js'></script>
</head>
<body>
<?php
nav(); ?>
 <main>
 <h1>Cart Page</h1>
<div id="CartTable">
<table>
 <tr>
    <th>Product</th>
    <th>Option</th>
    <th>Quantity</th>
    <th>Unit Price</th>
    <th>Sub-total</th>
  </tr>

<?php
$total = 0;
$cart = $_SESSION['cart'];

foreach($cart as $key => $value)
	{
	$id = $key;
	$idarray = $_SESSION['cart'][$id];
	foreach($idarray as $key => $value)
		{
		$oid = $key;
		$qty = $value;
		$title = titleConvert($id, $oid);
		$option = oidConvert($id, $oid);
		$price = priceConvert($id, $oid);
		$price2 = sprintf('%0.2f', $price);
		$subtotal = $price * $qty;
		$subtotal2 = sprintf('%0.2f', $subtotal);
		$total+= $subtotal;
		echo "<tr>";
		echo "<th>$title</th>";
		echo "<th> $option</th>";
		echo "<th> $qty</th>";
		echo "<th> $$price2</th>";
		echo "<th> $$subtotal2</th>";
		echo "</tr>";
		}
	}

echo "<tfoot>
    <tr>
      <th id='total' colspan='4'>Total :</th>
      <td>$$total</td>
    </tr>
   </tfoot>
</table>";
?>
<div id="buttons">
          <form action="products.php" id="form1">
            <input type="submit" value="Back to Products" id="cart"/>
          </form>
          <form action="products.php" method="POST" id="form2">
            <input type="hidden" name="cancel">
            <input type="submit" value="Clear Cart" id="cart"/>
          </form>
          <form action="checkout.php" id="form3">
            <input type="submit" value="Checkout Page" id="cart"/>
          </form>
        </div>
        </div>
      </main>
 <?php
footer();
debugmodule(); ?>
</body>

</html>