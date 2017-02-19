
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
include("tshirtstock.php");
?>
<body id="body">
    <header><?php include("../Navbar.php")?></header>
    <div class="container">
    <div class="element1">
        <div class="txtelement1" style="right: 80px;">
            Sri Lankan Tshirt
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id14" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2100</a></span>

        </span>


        <img src="img/srilanka.jpg" style="width:190px;height:190px;">


        <button class="button " onclick="add(14)">Add To Cart</button>


    </div>
    <div class="element2">
        <div class="txtelement1" style="right: 80px;">
            Australian Tshirt
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="2" size="1" id="id15" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2000</a></span>
        </span>

        <img src="img/australia.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(15)">Add To Cart</button>
    </div>

    <div class="element3">
        <div class="txtelement1" style="right:90px;">
            Pakistan TShirt
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id16" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 1200</a></span>
        </span>


        <img src="img/pakistan.png" style="width:190px;height:190px;">
        <button class="button " onclick="add(16)">Add To Cart</button>

    </div>

    <div class="element4">
        <div class="txtelement1" style="right:70px;">
            West Indies Tshirt
            <div class="elementsQty" style="right:-120px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id17" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 1500</a></span>
        </span>


        <img src="img/westindies.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(17)">Add To Cart</button>
    </div>
    <div class="element5">
        <div class="txtelement1" style="right: 100px;">
            Engalnd Tshirt
            <div class="elementsQty" style="right:-125px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id18" value="1" class="qty"><br></form>
            </div>

        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 2000</a></span>
        </span>


        <img src="img/england.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(18)">Add To Cart</button>
    </div>
    <div class="element6">
        <div class="txtelement1" style="right: 120px;">
            Indian Tshirt
            <div class="elementsQty" style="right:-130px">
                <form>QTY: <input type="text" name="qty" maxlength="3" size="1" id="id19" value="1" class="qty"><br></form>
            </div>
        </div>
        <span class="tags">
            <span class="post-tag"><a href="">Rs 1600</a></span>
        </span>


        <img src="img/india.jpg" style="width:190px;height:190px;">
        <button class="button " onclick="add(19)">Add To Cart</button>
    </div>


</div>
</body>
</html>
