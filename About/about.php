<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/stylyesheetForm.css">
    <link rel="stylesheet" type="text/css" href="../css/common.css">
    <title>About/Contact</title>


</head>
<body id="body">

<header id="header">
    <?php
    include "../Navbar.php";

    ?>
</header>
<div class="container">
    <div>
        <h2>How to Reach Us?</h2>
    </div>
    <div>
        <div>
            <style>
                #map {
                    width: 50%;
                    height: 400px;
                }
            </style>
            <div id="map"></div>
            <script>
                function initMap() {

                    //position variable
                    var iit = {lat: 6.865564, lng: 79.860304};

                    //creating a map object
                    var mapDiv = document.getElementById('map');
                    var map = new google.maps.Map(mapDiv, {
                        center: {lat: 6.8653, lng: 79.8599},
                        zoom: 10
                    });

                    //creating a marker object
                    var marker1 = new google.maps.Marker({
                        position: iit,
                        map: map,
                        title: 'company'
                    });
                }

            </script>
            <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN5t26PHH0CBYVAKv8pgejD0UYx5_Ebb0&callback=initMap">
            </script>

        </div>

        <div>
            <address>
                <p>No : 57<br/>
                    Ramakrishna Road <br/>
                    Colombo 06<br/>
                    Sri Lanka.</p>
                <p>Hotline:+94 722 727 272<br/>
                    Email :team@web.com</p>
            </address>
        </div>
    </div>


    <form class="form-horizontal" method="post" action="feedbackProcess.php">
        <div>
            <h2>Drop Your Message</h2>
        </div>
        <div class="form-group">

            <label class="col-sm-2 control-label">Name *</label>
            <div class="col-sm-4">
                <input class="form-control" id="name" name="name" type="text" required>
            </div>
        </div>
        <div class="form-group">

            <label class="col-sm-2 control-label">Email *</label>
            <div class="col-sm-4">
                <input class="form-control" id="email" name="email" type="email" required onclick="emailSuggest()">
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Message *</label>
            <textarea name="message" id="message" class="form-control" required row="8" style="width:75%;"></textarea>
        </div>
        <div>

            <label>Rating(Poor-1 Excellent-5) *</label>
            <input type="radio" name="star" id="s1" value="1" checked/>
            <label for="s1">1</label>
            <input type="radio" name="star" id="s2" value="2"/>
            <label for="s2">2</label>
            <input type="radio" name="star" id="s3" value="3"/>
            <label for="s3">3</label>
            <input type="radio" name="star" id="s4" value="4"/>
            <label for="s4">4</label>
            <input type="radio" name="star" id="s5" value="5"/>
            <label for="s5">5</label>

        </div>
        <div>
            <label for="eUpdates">Receive updates by email</label>
            <input id="eUpdates" type="checkbox" name="eUpdates" value="true">
        </div>
        <br/>
        <div>
			<input type="submit" style="margin-left:10%;"  class="btn btn-success"  value="Submit" onclick="return validateEmail()">
			<br/><br/><br/><br/><br/><br/>
        </div>
       
    </form>
</div>

<script src="about.js"></script>
<footer>
    <?php include("../footer.php");?>
</footer>
</body>
</html>