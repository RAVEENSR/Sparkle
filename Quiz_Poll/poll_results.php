
<?php
	
include ("../db_connect.php");
	session_start();
	if(isset($_SESSION["user_name"])){
		
		$l_name = $_SESSION['user_name'];
		echo $l_name;
		$vote = $_REQUEST['vote'];
		$validate = "SELECT voted,UsersUN FROM WebTechUsers WHERE UsersUN = '$l_name'";
		$result1 = mysqli_query($con,$validate);
		$row = $result1->fetch_assoc();
		$validate = "SELECT voted FROM WebTechUsers WHERE UserUN = '$l_name'";
		$result1 = mysqli_query($con,$validate);
		
		if ($row['voted'] == 0  ){
			
			$sql="update poll set poll_count=poll_count+1 where id='$vote'"; 
			$sql1="update webtechusers set voted = 1 where UsersUN='$l_name'"; 
			$result = mysqli_query($con,$sql);
			$result1 = mysqli_query($con,$sql1);
			echo  "&nbsp, You have successfully casted your vote.";
			
				
		}else{
			echo "&nbsp, You have already voted!";
		}
	}else {
		echo "You have not logged in";
	}
	
	$total_votes;
	$display = "SELECT SUM(poll_count) as poll_count from poll";
	$total = mysqli_query($con,$display);
	while ($row = $total->fetch_assoc()) {
		$total_votes = $row['poll_count'];
	}
	$no =1;
	$votes = array();
	$queryDisplay = "SELECT poll_option, poll_count from poll"; 
	$each = mysqli_query($con,$queryDisplay);
	
	while ($row = $each->fetch_assoc()) {
				
		$votes[$no] = $row['poll_count'];
		$no++;
	}
	
	$votes_1 = $votes[1];
	$votes_2 = $votes[2];
	$votes_3 = $votes[3];
			
	$percentage_1 = ($votes_1/$total_votes) * 100;
	$percentage_2 = ($votes_2/$total_votes) * 100;
	$percentage_3 = ($votes_3/$total_votes) * 100; 

	?>
<!DOCTYPE html>
<html>
<head> </head>
<body>
<h2>Result:</h2>
	<table>
	<tr>
	<td>Yes:</td>
	<td>
	<img src="poll.gif"
	width='<?php echo(round($percentage_1,2)); ?>'
	height='20'>
	<?php echo(round($percentage_1,2)); ?>%
	</td>
	</tr>
	<tr>
	<td>No:</td>
	<td>
	<img src="poll.gif"
	width='<?php echo(round($percentage_2,2)); ?>'
	height='20'>
	<?php echo(round($percentage_2,2)); ?>%
	</td>
	</tr>
	<tr>
	<td>Other:</td>
	<td>
	<img src="poll.gif"
	width='<?php echo(round($percentage_3,2)); ?>'
	height='20'>
	<?php echo(round($percentage_3,2)); ?>%
	</td>
	</tr>
	<tr>
	<td>
	<font size = "3" color = "blue">Total Votes:  <?php echo $total_votes; ?> </font>
	</td>
	</tr>
	</table>
	</body>
	</html>
