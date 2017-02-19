<!DOCTYPE html>
<html>
<<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/tag.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="js/function1.js" type="text/javascript"></script>
    <script src="js/add.js" type="text/javascript"></script>
</head>
<?php
include("batsstock.php");//including stock status from DB
?>

<body id="body">
<header><?php include("../Navbar.php")?></header>
    <div class="container">
    <div class="element1"> <!--including css styles in div tags-->
        <div class="txtelement1" style="right: 60px;">
            Gray Nicholl's Bat
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id8" value="1" class="qty"><br></form><!--recieving quantity from user-->
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 12000</a></span>
        </span>


        <img src="img/bat2.jpg" style="width:190px;height:190px;"><!--including image of the product-->


        <button class="button" onclick="add(8)">Add To Cart</button><!--calling add function while passing prodId as parameter onclick--> 


    </div>
    <div class="element2">
        <div class="txtelement1" style="right: 70px;">
            Kookabura Bat
            <div class="elementsQty" style="right:-100px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id9" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 15000</a></span>
        </span>

        <img src="img/bat1.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(9)">Add To Cart</button>
    </div>

    <div class="element3">
        <div class="txtelement1" style="right:160px;">
            Sparatn Bat
            <div class="elementsQty" style="right:-160px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id10" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 10000</a></span>
        </span>


        <img src="img/spartan.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(10)">Add To Cart</button>

    </div>

    <div class="element4">
        <div class="txtelement1" style="right:150px;">
            SS Bat
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id11" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 8000</a></span>
        </span>


        <img src="img/ss.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(11)">Add To Cart</button>
    </div>
    <div class="element5">
        <div class="txtelement1" style="right: 140px;">
            GM Bat
            <div class="elementsQty" style="right:-125px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id12" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 11000</a></span>
        </span>


        <img src="img/gm.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(12)">Add To Cart</button>
    </div>
    <div class="element6">
        <div class="txtelement1" style="right: 130px;">
            Adidas Bat
            <div class="elementsQty" style="right:-130px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id13" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 14000</a></span>
        </span>


        <img src="img/adidas.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(13)">Add To Cart</button>

    </div>

</div>

</body>
</html>