<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login
</title>
</head>


<style>
table,th,td{border;1x solid black;}
.multicolor-text {
text-align: center;
font-size: 50px;
background: linear-gradient(to left,
pink,
blue,
green,
brown,
purple,
orange,
red);
-webkit-background-clip: text;
color: transparent;
#blink {
font-size: 50px;
font-weight: bolder;
font-family: didot;
color: #1c87c9;
transition: 0.2s;
}
}
</style>
<body>
<div id="container_new">
<div id="newheader">
<div class="college_logo">
<table class="tbl_border" border="0" cellpadding="0" cellspacing="0" width="100%">
<tr style="height:90px"><td align="left" style="width:9%"><img src="image/logo.png" width="91px" height="75px"/></td>
<td align="center"><img src="image/banner.png" height="80px"/></td>
<td align="right" style="width:9%"><img src="image/home1.png" width="61px" height="85px"/></td>
</tr>
</table>
</div>
</div>
<br>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  			#tableContainer-1 
			{
    			height: 100%;
    			width: 100%;
    			display: table;
  			}	
  			#tableContainer-2 
			{
    			vertical-align: middle;
    			display: table-cell;
    			height: 100%;
  			}
  			#myTable 
			{
    			margin: 0 auto;
				border-collapse: collapse;
				border-radius: 16px;
				box-shadow: 5px 10px 8px 1px #8888;
  			}
		</style>
		<div id="tableContainer-1">
  			<div id="tableContainer-2">
    			<table id="myTable" height=400 width=24%>
     				<tr height=135>
						<th>
							<font size=5 face='Old English Text MT' color='#66CC00'>User login</font>
						</th>
					</tr>
					<tr>
						<th>
							<style>
								input[type=text], select 
								{
   									width: 82%;
    								padding: 8px 10px;
    								margin: 8px 0;
    								display: inline-block;
    								border: 1px solid #ccc;
    								border-radius: 6px;
    								box-sizing: border-box
								}
								input[type=password], select 
								{
   									width: 82%;
    								padding: 8px 10px;
    								margin: 8px 0;
    								display: inline-block;
    								border: 1px solid #ccc;
    								border-radius: 6px;
    								box-sizing: border-box;
								}
								input[type=submit] 
								{
    								width: 82%;
    								background-color: #66CC00;
    								color: white;
    								padding: 8px 10px;
    								margin: 8px 0;
    								border: none;
    								border-radius: 6px;
    								cursor: pointer;
								}
								input[type=submit]:hover 
								{
    								background-color: #0066FF;
								}
							</style>
							<form action="" method=post />
								<input type=text name=id placeholder="UserID..." />
								<input type=password name=pass placeholder="Password..." />
								<input type=submit name=sub value=Submit ><br><br>
								<a href=create.php>Create User.</a><br>
							</form>
							<?php
								session_start();
								if(isset($_GET["msg"]))
								{
									$msg=$_GET["msg"];
									echo "<center><font color='grey' size=4>$msg !!!</font></center><br>";	
								}		
							?>
						</th>
					</tr>
					<tr>
					</tr>
					<tr>
					</tr>
    			</table>
  			</div>
		</div>
	</body>
</html>
<?php
	error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['sub']))
	{
		include("dbconfig.php");
		$id=$_POST['id'];
		$pass=$_POST['pass'];
		$pass=md5($pass);
		$con=mysqli_connect($server,$uname,$pwd,$db);
		if(!$con)
			echo "connection error ".mysqli_error($con);
		else
		{
			$query="select * from login where username='$id' and password='$pass'";			
			$res=mysqli_query($con,$query);
			$row=mysqli_fetch_array($res);
			$_SESSION["username"]=$row["username"];
			$role=$row["role"];
			//echo $role;
			if(mysqli_num_rows($res)>=1)
			{
				if($role==1)
				header("Location:home1.php");
				if($role==0)
				header("Location:home.php");
			}
			else 
				header("Location:index.php?msg=Invalid Login");
		}
		mysqli_close($con);
	}
?>