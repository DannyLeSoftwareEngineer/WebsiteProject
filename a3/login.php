<?php session_start(); require_once('tools.php'); start("Login Page"); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='../login.js'></script>
</head>

<body>
     <?php nav(); ?>

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

    <?php
    footer();  
  debugmodule(); ?>

</body>

</html>