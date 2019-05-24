<?php session_start(); require_once('tools.php'); start("Checkout Page"); 
if(!isset($_SESSION['cart'])){
	header("Location: product.php");
}
?>

<script src='../tools.js'>
</script>
</head>
<body>
  <?php nav();  ?>
  <main>
    <h1>Checkout Page
    </h1>
    <div class="containerForm">
      <form method="POST">
        <label>Full Name.</label>
        <input type="text" name="FullName" value="<?php echo isset($_POST['FullName']) ? htmlspecialchars($_POST['FullName']) : '' ?>" required>
        <br>
        <p id="error1">
          <?= $fname_error ?>
        </p>	
        <label>Email: </label>
        <input type="email" name="Email" value="<?php echo isset($_POST['Email']) ? htmlspecialchars($_POST['Email']) : '' ?>" required>
        <br>
        <p id="error2">
          <?= $email_error ?>
        </p>
        <label>Address:</label>
        <textarea name="Address" rows="5" cols="40" ></textarea>
        <p id="error3">
          <?= $address_error ?>
        </p>
        <label>Mobile Phone: </label>
        <input type="text" name="Mobile" value="<?php echo isset($_POST['Mobile']) ? htmlspecialchars($_POST['Mobile']) : '' ?>" required>
        <br>
        <p id="error4">
          <?= $mobile_error ?>
        </p>
        <div id='searchWrapper'>
          <label style="padding-right:100px">Credit Card: </label>
          <img src='../../media/Visa_Logo.png' id="visa" alt="Visa_Logo" width="150" height="40" style="float:right"/>
          <input type="text" name="CreditCard" value="<?php echo isset($_POST['CreditCard']) ? htmlspecialchars($_POST['CreditCard']) : '' ?>"  onchange="visaValue(this.value)" required style="width: 330px";>
          <br>
        </div>
        <p id="error5">
          <?= $credit_error ?>
        </p>
        <label>Expiry Date:</label>
        <input type="date" name="ExpiryDate" value="<?php echo isset($_POST['ExpiryDate']) ? htmlspecialchars($_POST['ExpiryDate']) : '' ?>" required>
        <br>
        <p id="error6">
          <?= $expiry_error ?>
        </p>
        <input type="submit" name="submit" value="To receipt page" id="cart"  style="margin-top: 50px;"/>
      </form>
    </div>
 <?php

if (isset($_POST["submit"]))
	{
	$redirect = True;

	$testString = trim(htmlentities($_POST["FullName"]));
  	if (empty($testString))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error1","*Please enter a Name (No numbers and Some Puncuation allowed.)");', '</script>';
		$fname_error = "*Please enter a Name (No numbers and Some Puncuation allowed.)";
		}

	if (!(preg_match("/^[a-zA-Z -.',]{1,100}$/", htmlentities($_POST["FullName"]))))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error1","*Please enter a Name (No numbers and Some Puncuation allowed.)");', '</script>';
		$fname_error = "*Please enter a Name (No numbers and Some Puncuation allowed.)";
		}

	if (!filter_var(htmlentities($_POST["Email"]) , FILTER_VALIDATE_EMAIL))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error2","*Please enter a valid email");', '</script>';
		$email_error = "*Please enter a valid email";
		}
	$testString2 = trim(htmlentities($_POST["Address"]));
  	if (empty($testString2))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error3","*Please enter a valid Address");', '</script>';
		$address_error = "*Please enter a valid Address";
		}


	if (!(preg_match("/^[a-zA-Z \n\r\d\-.,'\/]{1,200}$/", htmlentities($_POST["Address"]))))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error3","*Please enter a valid Address");', '</script>';
		$address_error = "*Please enter a valid Address";
		}

	if (!(preg_match("/^(\(04\)|04|\+614)( ?\d){8}$/", htmlentities($_POST["Mobile"]))))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error4","*Please enter a valid Australian Phone number");', '</script>';
		$mobile_error = "*Please enter a valid Australian Phone number";
		}

	if (!(preg_match("/^(?:[ ]?[\d][ ]?){12,19}$/", htmlentities($_POST["CreditCard"]))))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error5","*Please enter a valid CreditCard number");', '</script>';
		$credit_error = "*Please enter a valid CreditCard number";
		}

	if (strtotime('+28 days') > strtotime(htmlentities($_POST["ExpiryDate"])))
		{
		$redirect = False;
		echo '<script type="text/javascript">', 'errorDisplay("error6","*Your card must not expire in a month");', '</script>';
		$expiry_error = "*Your card must not expire in a month";
		}

	if ($redirect)
		{
		$_SESSION['user']['FullName'] = htmlentities($_POST['FullName']);
		$_SESSION['user']['Email'] = htmlentities($_POST['Email']);
		$_SESSION['user']['Address'] = preg_replace("/[\r\n]+/", " ", htmlentities($_POST['Address']));
		$_SESSION['user']['Mobile'] = htmlentities($_POST['Mobile']);
		$_SESSION['user']['CreditCard'] = htmlentities($_POST['CreditCard']);
		$_SESSION['user']['ExpiryDate'] = htmlentities($_POST["ExpiryDate"]);
		header("Location: receipt.php");
		}
	}

?>
 </main>
 <?php
    footer();   
    debugmodule();?>
</body>

</html>
