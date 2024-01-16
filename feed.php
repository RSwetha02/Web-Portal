<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>FEEDBACK</title>
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

<?php
include('header.php');
session_start();
	$mail=$_SESSION["username"];
?>
<div id="FEEDBACK" class="tabcontent">
<table><tr><td>
<h1><b>FILL OUT THIS FORM<b></h1><br>
<form action="" method="post"><h3>1.Your Login E-mail address:<br></h3><br>
<?php 
echo '<label>'. $mail .'</label> <br><br>';
?>
<h3>2.Did you gain knowledge about the additives present in biscuits by using this web portal?</h3>
<br>
<input type="radio" name="two" id="Yes" value="Yes">
<label for="Yes">Yes</label>
<br>
<input type="radio"name="two" id="May be" value="May be">
<label for="May be">May be</label>
<br>
<input type="radio" name="two" id="No" value="No">
<label for="No">No</label><br>
<br>
<h3>3.After visiting this portal will you try to change your biscuits consuming routine (if it is necessary)?</h3>
<br>
<input type="radio" name="three" id="Yes" value="Yes">
<label for="Yes">Yes</label>
<br>
<input type="radio" name="three" id="May be" value="May be">
<label for="May be">May be</label>
<br>
<input type="radio" name="three" id="No" value="No">
<label for="No">No</label><br>
<br>
<h3>4.Is this web portal useful?</h3>
<br>
<input type="radio" name="four" id="Yes" value="Yes">
<label for="Yes">Yes</label>
<br>
<input type="radio" name="four" id="May be" value="May be">
<label for="May be">May be</label>
<br>
<input type="radio" name="four" id="No" value="No">
<label for="No">No</label><br>
<br>
<h3>5.Give your Suggestion:</h3>
<br>
<input type="text" name="sugg" id=""><br><br>
</td>
<td><img src="image/feedbackimg.jpg"height="550px" width="650px"></td><br>
        </tr><br>
<tr><td><center><input type="submit" value ="submit" name="sub" onclick="alert('THANK YOU FOR YOUR RESPONSE!')"></center></td></tr><br>
</table></form>
</div>

<?php
	error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['sub']))
	{

		include("dbconfig.php");
		
		$two=$_POST['two'];
		$three=$_POST['three'];
		$four=$_POST['four'];  
		$sugg=$_POST['sugg'];
		
		$con=mysqli_connect($server,$uname,$pwd,$db);
		if(!$con)
			echo "connection error ".mysqli_error($con);
		else
		{
			$query="insert into feedback (mailid,q2,q3,q4,q5)values('$mail','$two','$three','$four','$sugg')";			
			$res=mysqli_query($con,$query);
			if($res)	
				echo"<center><font color='grey' size=4>Added Successfully</font></center><br>";	
			else
				echo "error" .mysqli_error($con);
		}
		mysqli_close($con);
	}
?>
</body>