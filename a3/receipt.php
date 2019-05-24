<?php
session_start();
require_once ('tools.php');

start("Reciept Page");

if (!isset($_SESSION['user']))
	{
	header("Location: product.php");
	}

?>
    <script src='../tools.js'></script>

</head>
<body>
<?php
$date = date("Y/m/d");
$name = $_SESSION['user']['FullName'];
$address = $_SESSION['user']['Address'];
$mobile = $_SESSION['user']['Mobile'];
$email = $_SESSION['user']['Email'];
echo "<img src='../../media/Rooster Teeth logo.png' alt='RoosterTeeth Logo' id='taximage'>
<h1 style='font-size: 50px;'>RoosterTeeth Tax Invoice</h1>

<div id='companyinfo';>
	<p>Address: 1901 E 51st St Austin TX 78723</p>
	<p>Email: business@roosterteeth.com</p>
	<p>Website: https://store.roosterteeth.com/</p>
</div>
<br />
<div id='userinfo';>
	<h3 style='margin-left:5px;'>Invoice to: $name</h3>
	<p>Date: $date</p>
	<p>Adress: $address</p>
	<p>Mobile: $mobile</p>
	<p>Email: $email</p>
</div>";
?>

<table id='receipt';>
 <tr>
    <th>Item</th>
    <th>ID</th>
    <th>OID</th>
    <th>Quantity</th>
    <th>Unit Price</th>
   <th>Subtotal</th>
  </tr>

<?php
$total = 0;
$idk = $_SESSION['cart'];

foreach($idk as $key => $letter)
	{
	$id = $key;
	$idarray = $_SESSION['cart'][$key];
	foreach($idarray as $key => $letter)
		{
		$qty = $letter;
		$title = titleConvert($id, $key);
		$option = oidConvert($id, $key);
		$price = priceConvert($id, $key);
		$price2 = sprintf('%0.2f', $price);
		$subtotal = $price * $qty;
		$total+= $subtotal;
		$total2 = sprintf('%0.2f', $total);
		$subtotal2 = sprintf('%0.2f', $subtotal);
		$stack = array(
			$date,
			$name,
			$address,
			$mobile,
			$email,
			$id,
			$key,
			$qty,
			$price2,
			$subtotal2
		);
		echo "<tr>";
		echo "<th>$title</th>";
		echo "<th>$id</th>";
		echo "<th>$key </th>";
		echo "<th>$qty</th>";
		echo "<th>$$price2</th>";
		echo "<th>$$subtotal2</th>";
		echo "</tr>";
		$fp = fopen('orders.txt', 'a');
		flock($fp, LOCK_SH);
		fputcsv($fp, $stack, "\t");
		flock($fp, LOCK_UN);
		fclose($fp);
		}
	}

echo "<tfoot>
    <tr>
      <th id='total' colspan='5'>Total :</th>
      <td>$$total2</td>
    </tr>
   </tfoot>
</table>";
?>
<table id="comments">
<tr>
    <th>Other Comments or Special Instructions</th>
</tr>
<tr>
    <th>1. Total Payment is due in 30 days <br> 2. All overdue accounts are subject to a service charge of 1% per month </th>
</tr>
</table>

<footer>
 	<div>&copy;
        <script>
                document.write(new Date().getFullYear());
            </script> Danny le s3722067</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
	<div>All images from this website are sourced from roosterteeth.com and store.roosterteeth.com</div>
        <div>
            <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
	    <button id='toggleDebugModule' onclick='toggleDebugModule()'>Toggle Debug Module</button>
	    <button id='orders' onclick="location.href='https://titan.csit.rmit.edu.au/~s3722067/wp/a3/orders.txt';">Orders text file</button>
        </div>
	</footer>
 <?php
debugmodule();
?>
</body>

</html>
