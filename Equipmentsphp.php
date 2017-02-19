<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/new.css">
    <link rel="stylesheet" href="css/tag.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="js/function1.js" type="text/javascript"></script>
    <script src="js/add.js" type="text/javascript"></script>

 
 

</head>
<?php
include("equipmentsstock.php");
?>

<body id="body">
   <header><?php include("../Navbar.php")?></header>


    <div class="element1">
        <div class="txtelement1" style="right: 50px;bottom: 200px;">
            Premiere Leather Ball
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id20" class="qty" value="1"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 450</a></span>
        </span>


        <img src="img/ball1.jpg" style="width:190px;height:190px;">


        <button class="button " onclick="add(20)">Add To Cart</button>


    </div>
    <div class="element2">
        <div class="txtelement1" style="right: 50px;bottom: 200px;">
            Chisthi Leather Ball
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id21" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 300</a></span>
        </span>

        <img src="img/ball2.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(21)">Add To Cart</button>
    </div>

    <div class="element3">
        <div class="txtelement1" style="right:5px;">
            Kookabura Batting Gloves
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id22" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 1500</a></span>
        </span>


        <img src="img/glove1.png" style="width:190px;height:190px;">
        <button class="button " onclick="add(22)">Add To Cart</button>

    </div>

    <div class="element4">
        <div class="txtelement1" style="right:5px;">
            Kookabura Keeping Gloves
            <div class="elementsQty" style="right:-130px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id23" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2100</a></span>
        </span>


        <img src="img/glove2.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(23)">Add To Cart</button>
    </div>
    <div class="element5">
        <div class="txtelement1" style="right: 100px;">
            Adidas Helmet
            <div class="elementsQty" style="right:-125px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id24" class="qty" value="1"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 4000</a></span>
        </span>


        <img src="img/helmet1.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(24)">Add To Cart</button>
    </div>
    <div class="element6">
        <div class="txtelement1" style="right: 120px;">
            SG Helmet
            <div class="elementsQty" style="right:-100px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id25" class="qty" value="1"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2500</a></span>
        </span>


        <img src="img/helmet2.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(25)">Add To Cart</button>
    </div>


</body>
</html>