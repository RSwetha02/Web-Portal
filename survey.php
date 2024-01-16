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
include('header.php');
session_start();
	$mail=$_SESSION["username"];
?>
<br>
<div id="SURVEY" class="tabcontent">
<center><img src="image/survey.jpg" alt="self" width="1000" height="245" ></center>
<table><tr><td><form action="" method="post">
<p>1.Which type of biscuits you would prefer?</p><br>
<input type ="radio" name="one" id="html" value="Creamy">
<label for ="html">a.Creamy</label><br>
<input type ="radio" name="one" id="html"  value="Chocolate topping">
<label for ="html">b.Chocolate topping</label><br>
<input type ="radio" name="one" id="html"  value="Nuts topping">
<label for ="html">c.Nuts topping</label><br>
<input type ="radio" name="one" id="html"  value="Plain">
<label for ="html">d.Plain</label><br><br><br>
<p>2.Why do you prefer eating biscuits?</p><br>
<input type ="radio" name="two" id="html"  value="Time pass">
<label for ="html">a.Time pass</label><br>
<input type ="radio" name="two" id="html" value="snacks">
<label for ="html">b. snacks</label><br>
<input type ="radio" name="two" id="html"  value="when hungry">
<label for ="html">c. when hungry</label><br>
<input type ="radio" name="two" id="html"  value="for good health">
<label for ="html">d. for good health</label><br><br><br>
<p>3.How many biscuits do you eat in a day? </p><br>
<input type ="radio" name="three" id="html" value="Less than 5">
<label for ="html">a. Less than 5</label><br>
<input type ="radio" name="three" id="html" value="5 - 10">
<label for ="html">b. 5 - 10</label><br>
<input type ="radio" name="three" id="html" value="10 - 15">
<label for ="html">c. 10 - 15</label><br>
<input type ="radio" name="three" id="html"  value="More than 15">
<label for ="html">d. More than 15</label><br><br><br>
<p>4. What all nutritional facts yoy look for while purchasing biscuits? .</p><br>
<input type ="checkbox" name="four[]" id="html" value="Energy">
<label for ="html">a. Energy</label><br>
<input type ="checkbox" name="four[]" id="html" value="Protein">
<label for ="html">b. Protein</label><br>
<input type ="checkbox" name="four[]" id="html" value="Fiber">
<label for ="html">c. Fiber</label><br>
<input type ="checkbox" name="four[]" id="html" value="Carbohydrates">
<label for ="html">d.Carbohydrates</label><br>
<input type ="checkbox" name="four[]" id="html" value="Iron">
<label for ="html">e. Iron</label><br>
<input type ="checkbox" name="four[]" id="html" value="Calcium">
<label for ="html">f. Calcium</label><br>
<input type ="checkbox" name="four[]" id="html" value="Others">
<label for ="html">g. Others</label><br><br><br>
<p>5.  Which brand biscuits you eat more?</p><br>
<input type ="radio" name="five" id="html"  value="Britannia">
<label for ="html">a. Britannia</label><br>
<input type ="radio"  name="five" id="html"  value="Nutria choice">
<label for ="html">b. Nutria choice</label><br>
<input type ="radio" name="five" id="html" value="Marie">
<label for ="html">c. Marie</label><br>
<input type ="radio" name="five" id="html" value="Sun feast">
<label for ="html">d. Sun feast</label><br></td></tr></table><br><br>
<center>
<input type="submit" value="submit" name="sub" onclick="alert('THANK YOU FOR YOUR RESPONSE')" /></center>
</form>

<?php
	error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['sub']))
	{
		include("dbconfig.php");
		$one=$_POST['one'];
		$two=$_POST['two'];
		$three=$_POST['three'];
		$four=$_POST['four'];  
		$chk="";  
		foreach($four as $chk1)  
  		{  
      		$chk .= $chk1.",";  
   		}  
		$five=$_POST['five'];
		$con=mysqli_connect($server,$uname,$pwd,$db);
		if(!$con)
			echo "connection error ".mysqli_error($con);
		else
		{
			$query="insert into survey (mailid,q1,q2,q3,q4,q5)values('$mail','$one','$two','$three','$chk','$five')";			
			$res=mysqli_query($con,$query);
			if($res)	
				echo"<center><font color='grey' size=4>Added Successfully</font></center><br>";	
			else
				echo "error" .mysqli_error($con);
		}
		mysqli_close($con);
	}
?>


</div>
</body>
</html>
