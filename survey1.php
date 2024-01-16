<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SURVEY</title>
</head>

<body>
<style>
/* Style the tab content */
.tabcontent {

padding: 6px 12px;
border: 1px solid #ccc;
border-top: none;
}
</style>
<?php
include('header1.php');
session_start();
	$mail=$_SESSION["username"];
?>
<br>
<div id="SURVEY" class="tabcontent">
<center><img src="image/survey.jpg" alt="self" width="1000" height="245" ></center>
<?php
$conn=mysqli_connect('localhost','root','','ldc');
	$query="select * from survey";
	$res=mysqli_query($conn,$query);
	if(!mysqli_affected_rows($conn))
	{
		echo mysqli_error($conn);
	}
	else
	{
		echo "<center><table id=table align=center border=1>
				<tr><th width=150>Mail ID</th><th width=150>Question1</th><th width=150>Question2</th><th width=150>Question3</th><th width=150>Question4</th><th width=300>Question5</th></tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<br><tr><td><center>".$row[0]."<center></td><td><center>".$row[1]."</center></td><td><center>".$row[2]."</center></td><td><center>".$row[3]."</center></td><td><center>".$row[4]."</center></td></td><td><center>".$row[4]."</center></td></tr>";
		}
		echo"</table></center>";
	}
?>
</body>