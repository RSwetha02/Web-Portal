<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CALCULATOR</title>
</head>

<body>
<?php
include('header.php');
?>
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
</style>

<style>
/* Style the tab content */
.tabcontent {

padding: 6px 12px;
border: 1px solid #ccc;
border-top: none;
}
.table1 table{

width:70%;
}
.table1 td{
height:70px;
width:20%;
}
.table1 h5{
color:green;
}
								input[type=text]
								{
   									width: 82%;
    								padding: 8px 10px;
    								margin: 8px 0;
    								display: inline-block;
    								border: 1px solid #ccc;
    								border-radius: 6px;
    								box-sizing: border-box
								}
								input[type=button] 
								{
    								width: 82%;
    								background-color:#FF3333;
    								color: white;
    								padding: 8px 10px;
    								margin: 8px 0;
    								border: none;
    								border-radius: 6px;
    								cursor: pointer;
									}
									input[type=button]:hover 
								{
    								background-color:#999999;
								}
</style>
 <script >
         function fun()
         {
             let x = document.getElementById("view").value
             let y = eval(x/10);
             document.getElementById("result").value = y
         }
      
      </script>
<br>
<div id="CONTACT US" class="tabcontent">
        <center>  
	<h1 style="font-family:Times New Roman;font-size:40px;font-weight:bold;color:#174f90">FIND THE PERCENTAGE</h1>
	
	<div class=table1><table> 
	<tr><td ><h3>ENTER THE GRAM HERE:</h3><br> <input type="text" id="view"/>g <br> <br> <input type="button" value="CONVERT" onclick=fun() /> </td>
	<td><img height="250" width="250"src="image/calculation.jpg"></td>
	<td> <h3>EQUIVALENT PERCENTAGE VALUE:</h3> <br><br> <input type="text" id="result"/>%</td></tr>
	</table>
	</center></div>
</body>