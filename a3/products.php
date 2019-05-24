<?php session_start(); require_once('tools.php'); 
if(isset($_POST['cancel'])){
unset($_SESSION['cart']);
}
 start("Rooster Teeth Products");
?>

</head>

<body>

  <?php nav(); 

    $fp = fopen('products.txt','r'); 
   if (($headings = fgetcsv($fp, 0, "\t")) !== false)
	{
	while ($cells = fgetcsv($fp, 0, "\t"))
		{
		for ($x = 1; $x < count($cells); $x++) $products[$cells[0]][$headings[$x]] = $cells[$x];
		}
	}
    fclose($fp); 
    
   ?>
    <main>
        <h1>RWBY PRODUCTS</h1>
   
 <?php
 $columncounter = 0;
 foreach($products as $key => $values ) {
 $id = $key;
 $url = $products[$key]['url'];
 $url2 = $products[$key]['url2'];
 $title =  $products[$key]['Title'];
 $productstate =  $products[$key]['State'];
 $price =  $products[$key]['Price'];

	if($columncounter % 4 == 0){
	echo "<div class='row'>";
	}

   	echo  "<div class='column'>
                <div class='containerp'>
		    <form action='product.php' method='GET'>	
			<input type='hidden' id='custId' name='id' value='$id'>
			<button type='submit'>
			<img src=\"$url\" onmouseover='this.src=\"$url2\"' onmouseout='this.src=\"$url\"' alt=$title  class='productimage' />
			</button>
                    </form>";

		if($productstate == "sale"){
                   echo "<div class='sale'> SALE </div>";
		}
		else if($productstate == "new"){
                   echo "<div class='new'> NEW </div>";
		}
		
             echo "</div>
                <div class='descAnime'>RWBY</div>
                <div class='desc'>";
		if($productstate == "sale"){
		$baseprice =$products[$key]['BasePrice'];
		echo "<s>$$baseprice</s>";
		}
	     echo "$$price</div>

                <a href='product.php?id=$id'>
                    <div class='desc'>$title</div>
                </a>
            </div> ";

	$columncounter += 1; 
	if($columncounter % 4 == 0){
	echo "</div>";
	}
	}
   ?>

 </main>

 <?php
   footer(); 
echo "<button id='orders' onclick=\"location.href='https://titan.csit.rmit.edu.au/~s3722067/wp/a3/products.txt';\">Orders text file</button>";
     debugmodule() 
?>

</body>

</html>