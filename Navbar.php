<?php session_start(); ?>
<style>
    #logo {
        font-family: 'Montserrat', sans-serif;
        color: #FFD700;
        font-size: 25px;
    }

    #navbar-right {
        color: aqua;
        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
    }

    #navbar-right li {

        font-family: 'Montserrat', sans-serif;
        font-size: 15px;
    }

    .navbar {
        background: #000000; /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #000000, #434343); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #000000, #434343); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    li a.active {
        background: aqua !important;
    }
</style>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<div class="container">
    <!--Navigation bar-->
    <nav class="navbar navbar-inverse navbar-static-top row">
        <div class="navbar-header"><a id="logo" class="navbar-brand" href="/SparkleFinal/Home.php">SPARKLE</a></div>
        <ul class="nav navbar-nav">
            <li><a href="/SparkleFinal/Home.php">Home</a></li>
            <li><a href="/SparkleFinal/About/about.php">About us</a></li>
            <li><a href="/SparkleFinal/Quiz_Poll/start.php">Quiz</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">e-Shop <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
					<li><a href='/SparkleFinal/eShop 2.0/viewcart.php'>View Cart</a></li>
                    <li><a href="/SparkleFinal/eShop 2.0/Nutritionalphp.php">Nutritional</a></li>
                    <li><a href="/SparkleFinal/eShop 2.0/batsphp.php">Bats</a></li>
                    <li><a href="/SparkleFinal/eShop 2.0/Tshirtphp.php">T-Shirts</a></li>
                    <li><a href="/SparkleFinal/eShop 2.0/Equipmentsphp.php">Equipment</a></li>
                    <li><a href="/SparkleFinal/eShop 2.0/othersphp.php">Other</a></li>
                </ul>
            </li>
			
			<li><a href="/SparkleFinal/eShop 2.0/trackorder (2).php">Track Order</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">View CVs <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="/SparkleFinal/CV/Raveen.php">Raveen</a></li>
                    <li><a href="/SparkleFinal/CV/Sajith.php">Sajith</a></li>
                    <li><a href="/SparkleFinal/CV/Akalanka.php">Akalanka</a></li>
                    <li><a href="/SparkleFinal/CV/Maleesha.php">Maleesha</a></li>
                    <li><a href="/SparkleFinal/CV/Manuka.php">Manuka</a></li>
                </ul>
            </li>
            <li><a href="/SparkleFinal/About/testimonials.php">Testimonials</a></li>
			
        </ul>
        <ul id="navbar-right" class="nav navbar-nav navbar-right">
            <?php
            //Login buttons in navigation bar
            if (isset($_SESSION['user_name'])) {
                echo "<li style='margin-top:10%;'><span class='glyphicon glyphicon-user'></span>Hi," . $_SESSION['user_name'] . "</li>";
                echo "<li><a href='/SparkleFinal/Login/logoutProcess.php'><span class='glyphicon glyphicon-log-out'>Logout</a></li>";
            } else {
                echo "<li><a href='/SparkleFinal/Login/register.php'><span class='glyphicon glyphicon-user'>Signup</a></li>";
                echo "<li><a href='/SparkleFinal/Login/login.php'><span class='glyphicon glyphicon-log-in'>LogIn</a></li>";
            }

            ?>
        </ul>


    </nav>
</div>
