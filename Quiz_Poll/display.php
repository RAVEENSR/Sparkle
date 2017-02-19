<!DOCTYPE html>
<head> <title> Quiz </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/common.css">
</head>
<body id="body" onLoad = "time_spent()">
<header>
    <?php include '../Navbar.php';?>
</header>

<div class="container">
    <h1> Put your Cricket Knowledge to the Test!! </h1>
<p style="font-weight: bold;" id ="t"></p>
<p id ="ajax"> </p>
</div>
    
<script>

var hold=[];
var startDate = new Date();
var startTime = startDate.getTime();
function seconds_elapsed(){
var date_now = new Date();
var time_now = date_now.getTime();
var time_diff = time_now - startTime;
var seconds_elapsed = Math.floor ( time_diff / 1000 ); 
return (seconds_elapsed);
}
function time_spent(){
	
var secs = seconds_elapsed();
var mins = Math.floor ( secs / 60 );
secs -= mins * 60;
var hour = Math.floor ( mins / 60 );
mins -= hour * 60;
document.getElementById("t").innerHTML = "Time Elapsed- "+mins+" Minutes:"+secs+ " seconds";
var clock = setTimeout( "time_spent()", 1000 ); 
if(secs >= 10){
	clearTimeout(clock);
	//time_out();
	read_values();
	ajax();
}
}
function read_values(){
	var t;
	var answers_Arr;
	var k;
	hold=[];
	for(t = 0;t <= 10; t++){ 
	answers_Arr = document.getElementsByName("question"+t);
	for (k = 0; k < answers_Arr.length; k++){
		if(answers_Arr[k].checked){
			hold[t] = answers_Arr[k].value;
			//document.getElementById("test"+t).innerHTML = "Value: "+ hold[t];
			break;
		}else{
			hold[t] = "no";
			continue;
			
		}
		
	}
}

}
function ajax(){
var jsonString = JSON.stringify(hold);
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function()
{
    if (xmlhttp.readyState==4  &&  xmlhttp.status==200)
    {
	document.getElementById("ques").innerHTML = xmlhttp.responseText;
    }
}

xmlhttp.open("POST","result.php",true);
xmlhttp.setRequestHeader("Content-type", "application/json");
xmlhttp.send(jsonString);

}

</script>

<?php
include ("../db_connect.php");
$quesNo = 1;
$randomNo = 0;
	$x = 10; 
	$y = 1;
		$ran = range($y,$x);
		shuffle($ran);
		//$random = $ran[$quesNo];

$high = 3;
$low = 1;
$randomChoice = range($low, $high);
shuffle($randomChoice);
$ran_choice1 = $randomChoice[0];
$ran_choice2 = $randomChoice[1];
$ran_choice3 = $randomChoice[2];
	
while ( $quesNo <= 10){
	$random = $ran[$randomNo];
$display = "SELECT * FROM Questions WHERE questionId = '$random' ";
$result = $con->query($display);

if($result->num_rows > 0){
    echo "<div class='container'  style='font-size:25px;'>";
	 echo "<div id = 'ques'><table>";
	 
	  while($row = $result->fetch_assoc()) {
		  //random();
		   echo "<form action = 'result.php' method = 'get'>";
        echo "<tr><td>".$quesNo.")".$row["Question"]."</td><td> <p id = 'rightor".$quesNo."'></p> </td></tr>";
		echo "<tr><td><input type = 'radio' name = 'question".$quesNo."' value = 'wrong'id = '1'>".$row['choice'.$ran_choice1]." </td></tr>
		<tr> <td><input type = 'radio' name = 'question".$quesNo."'value = 'wrong'id = '2'>".$row['choice'.$ran_choice2]."</td></tr>
		<tr><td><input type = 'radio' name = 'question".$quesNo."'value = 'wrong'id = '3'>".$row['choice'.$ran_choice3]."</td></tr>
		<tr><td><input type = 'radio' name = 'question".$quesNo."' value = 'correct' id = '4'>".$row['choice4']."</td></tr></div>";
		if($quesNo >= 10){
			//include 'result.php'; 
			echo "<br/><tr><td><center><input type = 'submit' name = 'submit' value = 'submit'></center></td></tr> ";
		}
		
		
    }
    echo "</div>";
	
}else {
    echo "0 results";
}
$quesNo = $quesNo + 1;
$randomNo++;
} 
	echo "</form>";
		//echo "<p id = 'test'> </p>";
    echo "</table></div></div>";

//echo "question".$quesNo."";
$con->close();
?>
<footer><?php include ("../footer.php"); ?></footer>
</body>
</html>

