<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FEEDBACK</title>
</head>

<body>
<style>
h1{word-spacing:5px; font-weight:800; padding:2px; background-color:pink; color:navy;}
h2{word-spacing:5px;font-weight:700; color:purple;}
h3{word-spacing:5px;font-weight:700;color:green;}
p,ul{word-spacing:5px;font-weight:500;}
table.s {
  border-collapse: collapse;
  border: 1px solid black;
  table-layout: auto;
  width: 100%;
}
table.s,th,td{border:1x solid black;word-spacing:5px;}
.multicolor-text {text-align: center;font-size: 50px;
background: linear-gradient(to left,
pink,
blue,
green,
brown,
purple,
orange,
red);
-webkit-background-clip: text;
color: transparent;}
#blink 
{
font-size: 50px;
font-weight: bolder;
font-family: didot;
color: #1c87c9;
transition: 0.2s;
}
}
</style>

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
<div id="FEEDBACK" class="tabcontent">
<center>
<h1><b>FEEDBACK</h1></b></center><br>



</body>
</html>

<?php
$conn=mysqli_connect('localhost','root','','ldc');
	$query="select * from feedback";
	$res=mysqli_query($conn,$query);
	if(!mysqli_affected_rows($conn))
	{
		echo mysqli_error($conn);
	}
	else
	{
		echo "<center><table id=table align=center border=1>
				<tr><th width=150>Mail ID</th><th width=150>Question2</th><th width=150>Question3</th><th width=150>Question4</th><th width=300>Question5</th></tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<br><tr><td><center>".$row[0]."<center></td><td><center>".$row[1]."</center></td><td><center>".$row[2]."</center></td><td><center>".$row[3]."</center></td><td><center>".$row[4]."</center></td></tr>";
		}
		echo"</table></center>";
	}
?>