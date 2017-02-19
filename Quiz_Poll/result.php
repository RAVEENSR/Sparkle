
<?php include ("../db_connect.php");
$_POST = json_decode(file_get_contents('php://input')); 
$myarray = $_POST; 
$correct = 0;
$incorrect = 0;
$traverse = 1;
$not = 0;
$unanswered = 0;
$total = 0;
    
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<h1> Quiz Results! </h1>";
	echo "<link rel='stylesheet' href='quiz.css' type='text/css'>";
	while($traverse <= 10){
		if(isset($myarray[$traverse])){
			if($myarray[$traverse] == 'correct'){
				echo "<p> Question ".$traverse."  <p class ='right'> &#10004;</p>";
				$correct = $correct + 1;
				$total += 2;
			}else if($myarray[$traverse] == 'no'){
				echo "<p> Question ".$traverse."<p class ='wrong'>&#10006; </p>";
				$unanswered++;
			}else{
				echo "<p> Question ".$traverse."<p class ='wrong'>&#10006; </p>";
				$incorrect++;
				$total -= 1;
			}	
		}else{}
		$traverse++;
	}
	echo "<br><font size = '10' color = 'green'>Correct: ".$correct;
	echo "<br><font size = '10' color = 'red'>Incorrect: ".$incorrect;
	echo "<br><font size = '10' color = 'brown'>Unanswered: ".$unanswered;
	"<br><br><font size = 10 color = 'brown'>TOTAL MARKS = ".$total;
	if($total >= 15){
		echo "<font size ='10' color ='Green'> <br>GOOD JOB!";
	}else{
		echo "<font size ='10' color ='red'><br> BETTER LUCK NEXT TIME!";
	}			
}else{
	echo "<!DOCTYPE html>"; 
	echo "<head><title> Results! </title>";
	echo "<link rel='stylesheet' href='quiz.css' type='text/css'>";
	echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>";
	echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>";
	echo "<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
	echo "<link rel='stylesheet' href='../css/common.css' type='text/css'>";
	echo "</head>";
	echo "<body id='body'>";
	echo "<header>";
	include('../Navbar.php');
	echo "</header>";
	echo "<div class='container'>"; 
	echo "<h1> Quiz Results!</h1>";

	while($traverse <= 10){
			
		if(isset($_GET['question'.$traverse])){                        
			if($_GET['question'.$traverse] == 'correct'){
				echo "<p> Question ".$traverse."  <p class ='right'> &#10004;</p>";
				$correct = $correct + 1;
				$total += 2;
			}else{
				echo "<p> Question ".$traverse."<p class ='wrong'>&#10006; </p>";
				$incorrect = $incorrect + 1;
				$total -= 1;
			}	
		}else{
			echo "<p> Question ".$traverse."<p class ='wrong'>&#10006; </p>";
			$unanswered++;
		}
		$traverse++;	
	}
		
echo "<br/><font size = '10' color = 'green'>Correct: ".$correct;
echo "</font><br/><font size = '10' color = 'red'>Incorrect: ".$incorrect;
echo "</font><br/><font size = '10' color = 'brown'>Unanswered: ".$unanswered;
echo "</font><br/><br/><font size = 10 color = 'brown'>TOTAL MARKS = ".$total;
if($total >= 15){
	echo "</font><font size ='10' color ='Green'> <br>GOOD JOB!";
}else{
	echo "</font><font size ='10' color ='red'><br> BETTER LUCK NEXT TIME!</font>";
}
echo "</div>";
echo "<footer>";
include ('../footer.php');
echo "</footer>";
echo "</body>";
echo "</html>";
}
?>

