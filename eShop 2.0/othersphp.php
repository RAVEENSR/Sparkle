<!DOCTYPE html>
<html>
<head>
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
include("othersstock.php");
?>
<body id="body">
<header><?php include("../Navbar.php")?></header>
    <div class="element1">
        <div class="txtelement1" style="right:50px;">
            Gray Nicholl's Pads
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id26" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2350</a></span>
        </span>


        <img src="img/pad1.jpg" style="width:190px;height:190px;">


        <button class="button " onclick="add(26)">Add To Cart</button>


    </div>
    <div class="element2">
        <div class="txtelement1" style="right: 40px;">
            Sri Lankan Flag Sticker
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id27" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 10</a></span>
        </span>

        <img src="img/slflag.gif" style="width:190px;height:190px;">
        <button class="button " onclick="add(27)">Add To Cart</button>
    </div>

    <div class="element3">
        <div class="txtelement1" style="right:45px;">
            Australian Flag Sticker
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id28" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 8</a></span>
        </span>


        <img src="img/ausflag.png" style="width:190px;height:190px;">
        <button class="button " onclick="add(28)">Add To Cart</button>

    </div>

    <div class="element4">
        <div class="txtelement1" style="right:80px;">
            South African Flag
            <div class="elementsQty" style="right:-130px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id29" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 10</a></span>
        </span>


        <img src="img/saflag.png" style="width:190px;height:190px;">
        <button class="button " onclick="add(29)">Add To Cart</button>
    </div>
    <div class="element5">
        <div class="txtelement1" style="right: 40px;">
            Adidas Cricket Boots
            <div class="elementsQty" style="right:-125px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id30" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 20000</a></span>
        </span>


        <img src="img/shoes.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(30)">Add To Cart</button>
    </div>
    <div class="element6">
        <div class="txtelement1" style="right: 75px;">
            Sri Lankan Cap
            <div class="elementsQty" style="right:-100px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id31" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2500</a></span>
        </span>


        <img src="img/slcap.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(31)">Add To Cart</button>
    </div>

 
</body>
</html>