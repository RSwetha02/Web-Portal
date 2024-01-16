
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Visitor</title>
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
include("dbconfig.php");
		$con=mysqli_connect($server,$uname,$pwd,$db);
		if(!$con)
			echo "connection error ".mysqli_error($con);
		else
		{
			$query="select * from login";			
			$res=mysqli_query($con,$query);
			$row=mysqli_fetch_array($res);
			//echo $role;
			$num=mysqli_num_rows($res);
			$num=$num-1;
		}
		mysqli_close($con);
?>
<br>

<center><img width="250" height="200" src="image/visitor.jpg"  /><br>
<?php 
echo "<h1> No.of Visitors are ". $num. "<h1> </center>";
?>




</body>
</html>


<?php
$conn=mysqli_connect('localhost','root','','ldc');
	$query="select * from login where role=0";
	$res=mysqli_query($conn,$query);
	if(!mysqli_affected_rows($conn))
	{
		echo mysqli_error($conn);
	}
	else
	{
		echo "<center><table id=table align=center border=1>
				<tr><th width=150>Users Mail ID</th></tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo"<br><tr><td><center>".$row[0]."<center></td></tr>";
		}
		echo"</table></center>";
	}
?>