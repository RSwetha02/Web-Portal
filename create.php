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
<form action="" method='post' enctype="multipart/form-data" />
			<table align=center>
				<tr>
					<td width=200>
						<font size=4 face='Times new roman' >Email-ID</font>
					</td>
					<th width=50>
						:
					</th>
					<th width=300>
						<input type=email name=libid required />
					</th>
				</tr>
				<tr>
					<td width=200>
						<font size=4 face='Times new roman' >Password</font>
					</td>
					<th width=50>
						:
					</th>
					<th width=300>
						<input type=password name=pass required />
					</th>
				</tr>
				<tr>
					<td width=200>
						<font size=4 face='Times new roman' >Re-Password<br></font>
					</td>
					<th width=50>
						:
					</th>
					<th width=300>
						<input type=password name=pass1 required />
					</th>
				</tr>
			</table><br>
			<table align=center>
				<tr>
					<th width=200>
							<input type=submit name=sub value=Submit />
					</th>
					<th width=200>
						<input type=reset name=reset value=Reset />
					</th>
				</tr>
			</table>
		</form>
					<?php
						if(isset($_GET["msg"]))
						{
							$msg=$_GET["msg"];
							echo "<center><font color='grey' size=4>$msg !!!</font></center><br>";	
						}		
					?>
				</th>
			</tr>		
    	</table>
		
	<?php
	if(isset($_POST['sub']))
	{
		$libid=$_POST['libid'];
		$pass=md5($_POST['pass']);
		$pass1=md5($_POST['pass1']);
		$conn=mysqli_connect('localhost','root','','ldc');
		if($pass==$pass1)
		{
			$query="insert into login (username,password,role)values('$libid','$pass',0)";
			$res=mysqli_query($conn,$query);
			if($res)	
				echo"<center><font color='grey' size=4>Added Successfully</font></center><br>";	
			else
				echo mysqli_error($conn);
		}
	else
		echo "Your inserted password mis match";
	}
?>
<footer>
  <h3><a href="index.php">HOME</a></h3>
</footer>
</body>