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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='../login.js'></script>
</head>

<body>
    <header>
        <img class='logo' src='../../media/Rooster Teeth logo.png' alt='RoosterTeeth Logo'>
    </header>

    <nav class="loginnav">
        <a href="index.php">Home</a> |
        <a href="products.php">Products</a> |
        <a href="login.php">Login</a> |
    </nav>

    <main>
        <div class="background">
            <div class="logininfo">
                <h1 class="logginlabel">Login to Rooster Teeth Here</h1>
                <form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" method="POST">
                    <div class="form-group">
                        <label class="form-label" for="first">Email Address</label>
                        <input id="first" class="form-input" type="email" name="email" onfocus="isFocused(this)" onblur="isBlur(this)" required>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="last">Password</label>
                        <input id="last" class="form-input" type="password" name="password" onfocus="isFocused(this)" onblur="isBlur(this)" required>
                    </div>

                    <div class="info">
                        <input type="submit" value="LOG IN">
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer>
        <div>
            <h2><span>Stay Connected With Rooster Teeth</span></h2> </div>
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