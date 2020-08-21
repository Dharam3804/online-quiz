<?php
session_start();
?>
<html>
<head>
<title>Online Quiz - Quiz List</title>
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


echo "<h2 class=head1> Select Subject to Give Quiz </h2>";

$sql= "select * from mst_subject";
$rs=mysqli_query($conn,$sql);

echo "<table align=center>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr> <td align=center > <a href=showtest.php?subid=$row[0]> <font size=4> $row[1] </font> </a></td></tr>";
}
echo "</table>";
?>
</body>
</html>
