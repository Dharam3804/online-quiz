<?php
session_start();
?>

<html>
<head>
<title>Online Quiz  - Result </title>
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



extract($_SESSION);
$sql1="select t.test_name,t.total_que,r.test_date,r.score from mst_test t, mst_result r where
t.test_id=r.test_id and r.login='$login'";
$rs=mysqli_query($conn,$sql1);

echo "<h1 class=head1> Result </h1>";
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h1 class=head1> You have not given any quiz</h1>";
	exit;
}
echo "<table border=1 align=center><tr class=style2><td width=300>Test Name <td> Total<br> Question <td> Score";
while($row=mysqli_fetch_row($rs))
{
echo "<tr class=style8><td>$row[0] <td align=center> $row[1] <td align=center> $row[3]";
}
echo "</table>";
?>
</body>
</html>
