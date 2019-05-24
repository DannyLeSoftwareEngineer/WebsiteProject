<?php
function start($title) {
	echo <<<FOOTER
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <title>$title</title>
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/master.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    	<script src='../wireframe.js'></script>
	
FOOTER;
}

function nav() {
	echo <<<FOOTER
    <header>
        <img class='logo' src='../../media/Rooster Teeth logo.png' alt='RoosterTeeth Logo'>
    </header>
    <nav>
        <a href="index.php">Home</a> |
        <a href="products.php">Products</a> |
        <a href="login.php">Login</a> |
 	<a href="cart.php">Cart</a> |
    </nav>

FOOTER;
}


function footer() {
	echo <<<FOOTER
    <footer>
        <div>
            <h2><span>Stay Connected With Rooster Teeth</span></h2>        </div>
        <a href="https://www.facebook.com/roosterteeth/"><img id="socialmedia" src='../../media/Facebook logo.png' alt="Facebook logo"></a>
        <a href="https://twitter.com/TheRTStore"><img id="socialmedia" src='../../media/Twitter Logo.png' alt="Twitter logo"></a>
        <a href="https://www.instagram.com/theroosterteethstore/"><img id="socialmedia" src='../../media/Instagram Logo.png' alt="Instagram logo"></a>
	<a href="https://www.youtube.com/user/RoosterTeeth"><img id="socialmedia" src='../../media/Youtube Logo.png' alt="Youtube Logo"></a>
        <div>&copy;
            <script>
                document.write(new Date().getFullYear());
            </script> Danny le s3722067</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
	<div>All images from this website are sourced from roosterteeth.com and store.roosterteeth.com</div>
        <div>
            <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
	    <button id='toggleDebugModule' onclick='toggleDebugModule()'>Toggle Debug Module</button>
        </div>
    </footer>

FOOTER;
}

  function preShow( $arr, $returnAsString=false ) {
   $ret  = '<pre>' . print_r($arr, true) . '</pre>';
   if ($returnAsString)
     return $ret;
   else 
     echo $ret; 
}


   function check($id){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
    $foo = FALSE;
    foreach ( $products as $key => $letter ) {
    if($id == $key){
	$foo = TRUE;
     } 
  }
return $foo;
}
	
   function check2($check,$id,$oid){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
    $foo = FALSE;
    if($check){
    foreach ( $products[$id] as $key => $letter ) {
    if($oid == $key){
	$foo = TRUE;
     } 
  }
}
return $foo;
}


   function titleConvert($id,$oid){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp);   
return $products[$id][$oid]['Title'];
}

  function oidConvert($id,$oid){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
return $products[$id][$oid]['Option'];
}

 function priceConvert($id,$oid){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
return $products[$id][$oid]['Price'];
}

  
function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

function debugmodule() {
 echo "<div id='debugmod' style='display:block';>";
 echo "<p>POST DATA</p>";
 preShow($_POST);
 echo "<p>SESSION DATA</p>";
 preShow($_SESSION);
 echo "<p>PHP CODE</p>";
 printMyCode(); 
 echo "</div>";
}

  function productsFile(){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=2; $x<count($cells); $x++) 
          $products[$cells[0]][$cells[1]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
    return $products;
}

 function productsFile2(){
    $fp = fopen('products.txt','r'); 
    if (($headings = fgetcsv($fp, 0, "\t")) !== false) { 
      while ( $cells = fgetcsv($fp, 0, "\t") ) { 
        for ($x=1; $x<count($cells); $x++) 
          $products[$cells[0]][$headings[$x]]=$cells[$x]; 
      } 
    } 
    fclose($fp); 
    return $products;
}


?>