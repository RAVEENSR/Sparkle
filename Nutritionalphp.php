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
include("nutritionalstock.php");
?>
<body id="body">
<header><?php include("../Navbar.php")?></header>

    <div class="element1">
        <div class="txtelement1" style="right: 80px;">
            RedBull Energy Drink
            <div class="elementsQty" style="right:-150px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id2" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 295</a></span>
        </span>
        <img src="img/drink2.jpg" style="width:190px;height:190px;">
    <button class="button " onclick="add(2)">Add To Cart</button>
           
    </div>
    
    <div class="element2">
        <div class="txtelement1" style="right: 20px;">
            Gatorade Energy Drink
            <div class="elementsQty" style="right:-100px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id3" value="1" class="qty"><br></form>
            </div>
                </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 300</a></span>
        </span>

        <img src="img/drink1.png" style="width:190px;height:190px;">
         <button class="button " onclick="add(3)">Add To Cart</button>
    </div>
       

    <div class="element3">
        <div class="txtelement1" style="right:20px;">
            Gold Standard Whey Protein
            <div class="elementsQty" style="right:-160px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id4" value="1" class="qty"><br></form>
            </div>
                </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 5500</a></span>
        </span>


        <img src="img/whey.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(4)">Add To Cart</button>

    </div>
   
    <div class="element4">
        <div class="txtelement1" style="right: 40px;">
            Superior Amino Tabs
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id5" value="1" class="qty"><br></form>
            </div>

                </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 6000</a></span>
        </span>
        <img src="img/amino.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(5)">Add To Cart</button>
    </div>
    <div class="element5">
        <div class="txtelement1" style="right: 50px;">
            Monster Energy Drink
            <div class="elementsQty" style="right:-125px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id6" value="1" class="qty"><br></form>
            </div>
                </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 420</a></span>
        </span>


        <img src="img/monster.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(6)">Add To Cart</button>
    </div>
    <div class="element6">
        <div class="txtelement1" style="right: 150px;">
            Creatine
            <div class="elementsQty" style="right:-130px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id7" value="1" class="qty"><br></form>
            </div>
                </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2300</a></span>
        </span>


        <img src="img/creatine.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(7)">Add To Cart</button>
    </div>

    
</body>
   
</html>