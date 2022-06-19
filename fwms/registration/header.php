<!-- header -->
<div class="header">
    <div class="container">
        <div class="header-left">
            <span class="menu"><img src="images/menu.png" alt=""/></span>
                <ul class="nav1">
                    <li><a href="index.php">HOME</a></li>
                    <li><a class="active" href="about.php">ABOUT</a></li>
                    <li><a href="plant-available.php"> BUY </a></li>
                    
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="donor/login.php">DONOR/SELLER</a></li>
                    <li><a href="admin/login.php">ADMIN</a></li>
                    <li><a href="registration/index.php" style=" color: rgb(198, 20, 243); background-color: azure;  padding: 4px 5px;border-radius: 6px;width: 120px;font-family: 'Droid Serif', serif ;text-align:right;" 
}

>LogIn</a></li>
                    
                    
                    
                </ul>
                <!-- script for menu -->
                    <script> 
                        $( "span.menu" ).click(function() {
                        $( "ul.nav1" ).slideToggle( 300, function() {
                         // Animation complete.
                        });
                        });
                    </script>
                <!-- //script for menu -->
        </div>
        <div class="header-right">
           <!-- <a href="index.php"><img src="images/logo.png" alt=""></a>-->
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //header -->