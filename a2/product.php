<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/master.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src='../wireframe.js'></script>
    <script src='../counter.js'></script>
    <script src='../slideshow2.js'></script>
    <script src='../collapsible.js'></script>

</head>

<body>

    <header>
        <img class='logo' src='../../media/Rooster Teeth logo.png' alt='RoosterTeeth Logo'>
    </header>

    <nav>
        <div>
            <a href="index.php">Home</a> |
            <a href="products.php">Products</a> |
            <a href="login.php">Login</a> |
    </nav>

    <main>
        <div class="singleproductrow">

            <div class="singleproductcolumn">
                <div class="slideshow-container">

                    <div class="mySlides fade">
                        <div class="numbertext">1 / 2</div>
                        <img src="../../media/RWBY_Team_RWBY_Letters_Tee_Ruby.png" alt="RWBY_Team_RWBY_Letters_Tee_Ruby" class="productimage">

                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 2</div>
                        <img src="../../media/RWBY_Team_RWBY_Letters_Tee_Ruby2.png" alt="RWBY_Team_RWBY_Letters_Tee_Ruby2"  class="productimage" onload="currentSlide(1)">

                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <div class="thumbnailcontainer">
                    <img src="../../media/RWBY_Team_RWBY_Letters_Tee_Ruby.png" onclick="currentSlide(1)" class="thumbnail">
                    <img src="../../media/RWBY_Team_RWBY_Letters_Tee_Ruby2.png" onclick="currentSlide(2)" class="thumbnail">
                </div>

            </div>

            <div class="singleproductcolumn">
                <h1>RWBY Team RWBY Letters Tee - Ruby</h1>
                <p>
                    <label class="producttype">PRODUCT TYPE-</label> <span>Shirts</span></p>
                <p>
                    <label class="productvendor">VENDOR-</label> <span>RWBY</span></p>
                <p><span>The graphic RWBY Letters Tees feature your favorite heroines in action poses with their symbol. Art by Asako Nishida. Nishida is an animator and character designer in Osaka, Japan.See more <a href="https://twitter.com/asakonishida">here.</a></span></p>
                <button class="collapsible" onclick="clicked(this)">More Infomation</button>
                <div class="content">
                    <p><strong>Details + Care</strong></p>
                    <ul>
                        <li>Gender inclusive fit</li>
                        <li>100% Cotton</li>
                        <li>Machine wash cold, machine dry low heat</li>
                    </ul>
                </div>
		<p id="price">$24.99</p>	
                <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="POST" onsubmit="return validateForm()" class="boxed">
                    <input type="hidden" id="custId" name="id" value="2077">
                    <div>
                        <p>Size:</p>
                    </div>
                    <input type="radio" id="Small" name="option" value="Small" checked>
                    <label for="Small">S</label>

                    <input type="radio" id="Medium" name="option" value="Medium">
                    <label for="Medium">M</label>

                    <input type="radio" id="Large" name="option" value="Large">
                    <label for="Large">L </label>

                    <input type="radio" id="Extra Large" name="option" value="Extra Large">
                    <label for="Extra Large">XL</label>

                    <input type="radio" id="Extra Extra Large" name="option" value="Extra Extra Large">
                    <label for="Extra Extra Large">XXL </label>		
                    <div>
                        <p>Quantity:</p>
                    </div>
                    <input type="button" value="-" id="minus" onclick="minusvalue();">
                    <input type="number" min="0" size="25" value="0" id="count" name="qty" onchange="qtyChange(this.value)" required>
                    <input type="button" value="+" id="plus" onclick="addvalue();">
		    <p id="error">*Please enter a quantity greater than 0</p>	
                    <div>
                        <p id="subtotal">Subtotal: $0.00</p>
                    </div>
                    <div>
                        <input type="submit" value="Add to cart" id="cart">
                    </div>
                    <form>
            </div>

        </div>
    </main>

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
        </div>
    </footer>

</body>

</html>