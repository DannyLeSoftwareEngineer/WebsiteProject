<?php session_start(); require_once('tools.php'); ?>
<?php 

    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
    

 $fakeID = True;
 foreach ( $products as $key => $value ) {
   if($_GET['id'] == $key){
	$fakeID = False;
     } 
  }

 if($fakeID){
	header("Location: products.php");
	}

  $keys = array_keys($products[$_GET['id']]);
  $Title = $products[$_GET['id']][$keys[0]]['Title'];
  start($Title);

?>
    <script src='../tools.js'></script>
    <script src='../counter.js'></script>
    <script src='../slideshow2.js'></script>
    <script src='../collapsible.js'></script>

</head>

<body>

<?php nav();?>
<?php
$id = $_GET['id'];
$keys = array_keys($products[$id]);
$url = $products[$id][$keys[0]]['url'];
$url2 = $products[$id][$keys[0]]['url2'];
$Title = $products[$id][$keys[0]]['Title'];
$des = $products[$id][$keys[0]]['Description'];
$Price = $products[$id][$keys[0]]['Price'];
$buttons = ""; 
foreach($keys as $key => $values) {
	$option = $products[$id][$values]["Option"];
	$buttons = $buttons."<input type='radio' id=$option name='option' value=$values checked>";
	$buttons = $buttons."<label for=$option>$values</label>";
}
	echo <<<FOOTER
<main>
        <div class="singleproductrow">

            <div class="singleproductcolumn">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 2</div>
                        <img src="$url" alt="$url" class="productimage">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 2</div>
                        <img src="$url2"  class="productimage" onload="currentSlide(1)">

                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="thumbnailcontainer">
                    <img src="$url" onclick="currentSlide(1)" class="thumbnail">
                    <img src="$url2" onclick="currentSlide(2)" class="thumbnail">
                </div>
            </div>
            <div class="singleproductcolumn">
                <h1>$Title</h1>
                <p>
                    <label class="producttype">PRODUCT TYPE-</label> <span>Shirts</span></p>
                <p>
                    <label class="productvendor">VENDOR-</label> <span>RWBY</span></p>
                <p><span>$des</span></p>
                <button class="collapsible" onclick="clicked(this)">More Infomation</button>
                <div class="content">
                    <p><strong>Details + Care</strong></p>
                    <ul>
                        <li>Gender inclusive fit</li>
                        <li>100% Cotton</li>
                        <li>Machine wash cold, machine dry low heat</li>
                    </ul>
                </div>
		<p id="price">$$Price</p>	
                <form action="cart.php" method="POST" onsubmit="return validateForm()" class="boxed">
                    <input type="hidden" id="custId" name="id" value=$id>
                    <div>
                        <p>Size:</p>
                    </div>			
			$buttons	
                    <div>
                        <p>Quantity:</p>
                    </div>
                    <input type="button" value="-" id="minus" onclick="minusvalue($Price);">
                    <input type="number" min="0" size="25" value="0" id="count" name="qty" onchange="qtyChange(this.value, $Price)" required>
                    <input type="button" value="+" id="plus" onclick="addvalue($Price);">
		    <p id="error">*Please enter a quantity greater than 0</p>	
                    <div>
                        <p id="subtotal">Subtotal: $0.00</p>
                    </div>
                    <div>
                        <input type="submit" value="Add to cart" id="cart">
                    </div>
                    </form>
            </div>

        </div>
    </main>
FOOTER;


?>
   
<?php footer();
debugmodule();?>

</body>

</html>