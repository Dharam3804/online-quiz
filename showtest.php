<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
$servername = "fdb26.awardspace.net";
$username = "3318186_db";
$password = "dharam21823804";
$dbname="3318186_db";

$conn=mysqli_connect($servername, $username,$password ,$dbname);
if(!$conn)
 { 
   die("Could not Connect My Sql");
 }

extract($_GET);
$sql1="select * from mst_subject where sub_id=$subid";
$rs1=mysqli_query($conn,$sql1);

$row1=mysqli_fetch_array($rs1);

echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";

$sql="select * from mst_test where sub_id=$subid";
$rs=mysqli_query($conn,$sql);

if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h2 class=head1> No Quiz for this Subject </h2>";
	exit;
}
echo "<h2 class=head1> Select Quiz Name to Give Quiz </h2>";
echo "<table align=center>";

while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz.php?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>
</body>
</html>
