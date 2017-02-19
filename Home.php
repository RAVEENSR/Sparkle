<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/homeStyle.css">
    <link rel="stylesheet" type="text/css" href="css/common.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="body">
<!--navigation bar -->
<header><?php include("Navbar.php"); ?></header>


<div class="container fill">
    <div id="slideshow" class="bootstrap-iso">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active"><img src="img/img1.jpg" alt="..."></div>
                <div class="item"><img src="img/img2.jpg" alt="..."></div>
                <div class="item"><img src="img/img3.jpg" alt="..."></div>
                <div class="item"><img src="img/img4.jpg" alt="..."></div>
                <div class="item"><img src="img/img5.jpg" alt="..."></div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span
                    class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control"
                                                                             href="#carousel-example-generic"
                                                                             role="button" data-slide="next"> <span
                    class="glyphicon glyphicon-chevron-right"></span> </a></div>
        <!-- Carousel -->
    </div>


    <script>
        function poll_validation() {
            var value;
            if (document.getElementById("1").checked) {
                value = document.getElementById("1").value;
                //document.getElementById("answer").innerHTML = "You selected one";
            } else if (document.getElementById("2").checked) {
                value = document.getElementById("2").value;
                //document.getElementById("answer").innerHTML = "You selected two";
            } else if (document.getElementById("3").checked) {
                value = document.getElementById("3").value;
                //document.getElementById("answer").innerHTML = "You Selected three";
            } else {
                alert("Please select an option to Continue");
            }
            //document.getElementById("answer").innerHTML = value;

            var radiovalue = value;
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("poll").innerHTML = xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET", "Quiz_Poll/poll_results.php?vote=" + radiovalue, true);
            xmlhttp.send();
        }


    </script>
    <div class="row">
    <br/><br/>
        <div id="poll" class="col-sm-3">
		
            <h1>Daily pole</h1>
            <p>Is Day/Night Test Matches the future of Test Cricket?</p>
            <div id="pollDisplay">
                <form>
                    <div style="padding:0 0 5px 0;">
                        <input type="radio" name="poll_option" id="1" class="poll_sys" value="1">
                        <label>Yes</label>
                    </div>
                    <div style="padding:0 0 5px 0;">
                        <input type="radio" name="poll_option" id="2" class="poll_sys" value="2">
                        <label>No</label>
                    </div>
                    <div style="padding:0 0 5px 0;">
                        <input type="radio" name="poll_option" id="3" class="poll_sys" value="3">
                        <label>Day/Night & Day Test Matches</label>
                    </div>
                    <input type="button" onclick="poll_validation();" class="vote" name="poll" value="Vote">
                </form>
            </div>

            <p id="answer"></p>
        </div>
   
    <div class="col-md-8">
        <p style="margin-top:25px;font-size:25px">Looking for any kind of Cricket equipments online? Sparkle is the place to be. Sparkle is an online sports store specially put up for your sporting needs clubbed with the best deals across a host of brands serving best quality products. At Sparkle you can look for your needed Cricket equipment and the website can surely provide you a better online shopping experience of Cricket equipments. Sparkle deals in leather bats,leather balls,nutritional food items and a lot more products. </p>
        </div>
    </div>
    <br/><br/><br/><br/>
    </div>
    <footer><?php include ("footer.php")?></footer>
</body>
</html>