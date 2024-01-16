<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SELF ASSESSMENT</title>
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
include('header.php');
session_start();
	$mail=$_SESSION["username"];
?>
<br>
<div id="SELF ASSESSMENT" class="tabcontent">
<center>
<h1><b>SELF ASSESSMENT</h1></b></center><br><br>
<table><tr><td>
<form action="" method="post">
<p>1.BHA(Butylated hydroxyanisole) is a __________________</p><br>
<input type ="radio" name="one" id="html" value="Antioxidant">
<label for ="html">a. Antioxidant</label><br>
<input type ="radio" name="one" id="html"  value="Flavour enhancer">
<label for ="html">b. Flavour enhancer</label><br>
<input type ="radio" name="one" id="html"  value="Pesticide">
<label for ="html">c. Pesticide</label><br>
<input type ="radio" name="one" id="html"  value="Permitted color">
<label for ="html">d. Permitted color</label><br><br><br>
<p>2. "Ingredient" means ______________</p><br>
<input type ="radio" name="two" id="html"  value="An Extraneous matter present in the final product">
<label for ="html">a. An Extraneous matter present in the final product</label><br>
<input type ="radio" name="two" id="html" value="A Substance that gets modified in the end product">
<label for ="html">b. A Substance that gets modified in the end product</label><br>
<input type ="radio" name="two" id="html"  value="Any Substance used to prepare food">
<label for ="html">c. Any Substance used to prepare food</label><br>
<input type ="radio" name="two" id="html"  value="A Food additive used in food preparation">
<label for ="html">d. A Food additive used in food preparation</label><br><br><br>
<p>3. To produce a crisper cookie, increase the amount of ____________ in the cookie dough._</p><br>
<input type ="radio" name="three" id="html" value="Fat and moisture">
<label for ="html">a. Fat and moisture</label><br>
<input type ="radio" name="three" id="html" value="Sugar">
<label for ="html">b. Sugar</label><br>
<input type ="radio" name="three" id="html" value="Fat and sugar">
<label for ="html">c. Fat and sugar</label><br>
<input type ="radio" name="three" id="html"  value="Sugar and moisture">
<label for ="html">d. Sugar and moisture</label><br><br><br>
<p>4.The highest amount of dietary fiber found in a commercially mass-produced digestive biscuit was _______ percent.</p><br>
<input type ="radio" name="four" id="html" value="8.9%">
<label for ="html">a.  8.9%</label><br>
<input type ="radio" name="four" id="html"  value="7.1%">
<label for ="html">b. 7.1%</label><br>
<input type ="radio" name="four" id="html"  value="5.2%">
<label for ="html">c. 5.2%</label><br>
<input type ="radio" name="four" id="html"  value="9.0%">
<label for ="html">d. 9.0%</label><br><br><br>
<p>5. Which is not an ingredient in sugar cookies?</p><br>
<input type ="radio" name="five" id="html"  value="Sugar">
<label for ="html">a. Sugar</label><br>
<input type ="radio" name="five" id="html"  value="Flour">
<label for ="html">b. Flour</label><br>
<input type ="radio" name="five" id="html" value="Oil">
<label for ="html">c. Oil</label><br>
<input type ="radio" name="five" id="html" value="Eggs">
<label for ="html">d. Eggs</label><br><br><br>
<p>6. When do people in the United kingdom celebrate the National Biscuit Day____________.</p><br>
<input type ="radio" name="six" id="html"  value="29th February">
<label for ="html">a. 29th February</label><br>
<input type ="radio" name="six" id="html" value="29th May">
<label for ="html">b. 29th May</label><br>
<input type ="radio" name="six" id="html" value="29th August">
<label for ="html">c. 29th August</label><br>
<input type ="radio" name="six" id="html" value="29th July">
<label for ="html">d. 29th July</label><br><br><br>
<p>7. Which of the following is not a main ingredient often used for making biscuits____________.</p><br>
<input type ="radio" name="seven" id="html"  value="Cream">
<label for ="html">a. Cream</label><br>
<input type ="radio" name="seven" id="html"  value="Sugar">
<label for ="html">b. Sugar</label><br>
<input type ="radio" name="seven" id="html" value="Flour">
<label for ="html">c. Flour</label><br>
<input type ="radio" name="seven" id="html" value="Egg">
<label for ="html">d. Egg</label><br><br><br>
<p>8. The word "Biscuit" originates from which language____________.</p><br>
<input type ="radio" name="eight" id="html" value="German">
<label for ="html">a. German</label><br>
<input type ="radio" name="eight" id="html"  value="French">
<label for ="html">b. French</label><br>
<input type ="radio" name="eight" id="html" value="Spanish">
<label for ="html">c. Spanish</label><br>
<input type ="radio" name="eight" id="html"  value="America">
<label for ="html">d. America</label><br><br><br>
<p>9. What are the four major ingredients in biscuits__________.</p><br>
<input type ="radio" name="nine" id="html"  value="Water, eggs, salt, flour">
<label for ="html">a. Water, eggs, salt, flour</label><br>
<input type ="radio" name="nine" id="html"  value="Baking soda, sugar, butter, salt">
<label for ="html">b. Baking soda, sugar, butter, salt</label><br>
<input type ="radio" name="nine" id="html"value="Sugar, flour, water, egg">
<label for ="html">c. Sugar, flour, water, egg</label><br>
<input type ="radio" name="nine" id="html"  value="Sugar, butter, egg, flour">
<label for ="html">d. Sugar, butter, egg, flour</label><br><br><br>
<p>10. Biscuits baked in the same batch should be the same shape and size_________.</p><br>
<input type ="radio" name="ten" id="html"  value="True">
<label for ="html">a. True</label><br>
<input type ="radio" name="ten" id="html"  value="False">
<label for ="html">b. False</label><br><br><br>
<center><input type="submit" value ="submit" name="sub" onclick="alert('THANK YOU FOR YOUR RESPONSE!')"><center>
</form>
</td>
<td><img src="image/self-assessment.jpg" height="756px" width="600px"></td></tr></table>
</div>
<?php
	error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['sub']))
	{

		include("dbconfig.php");
		$one=$_POST['one'];
		$two=$_POST['two'];
		$three=$_POST['three'];
		$four=$_POST['four'];  
		$five=$_POST['five']; 
		$six=$_POST['six']; 
		$seven=$_POST['seven']; 
		$eight=$_POST['eight']; 
		$nine=$_POST['nine']; 
		$ten=$_POST['ten']; 
		$total="0";
		if($one=="Antioxidant")
		$total=$total+1;
		if($two=="Any Substance used to prepare food")
		$total=$total+1;
		if($three=="Sugar")
		$total=$total+1;
		if($four=="7.1%")
		$total=$total+1;
		if($five=="Oil")
		$total=$total+1;
		if($six=="29th May")
		$total=$total+1;
		if($seven=="Cream")
		$total=$total+1;
		if($eight=="French")
		$total=$total+1;
		if($nine=="Sugar, butter, egg, flour")
		$total=$total+1;
		if($ten=="True")
		$total=$total+1;
		$con=mysqli_connect($server,$uname,$pwd,$db);
		if(!$con)
			echo "connection error ".mysqli_error($con);
		else
		{
			$query="insert into self (mailid,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,total)values('$mail','$one','$two','$three','$four','$five','$six','$seven','$eight','$nine','$ten','$total')";
						
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