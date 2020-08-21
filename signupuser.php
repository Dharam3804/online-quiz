<html>
<head>
<title>User Signup</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
extract($_POST);


$servername = "fdb26.awardspace.net";
$username = "3318186_db";
$password = "dharam21823804";
$dbname="3318186_db";

$conn=mysqli_connect($servername, $username,$password ,$dbname);
if(!$conn)
 { 
   die("Could not Connect My Sql");
 }
$sql="select * from mst_user where login='$lid'";
$rs=mysqli_query($conn,$sql);

if (mysqli_num_rows($rs)>0)
{
	echo "<br><br><br><div class=head1>Login Id Already Exists</div>";
	exit;
}
$query="insert into mst_user(user_id,login,pass,username,address,city,phone,email) values('$uid','$lid','$pass','$name','$address','$city','$phone','$email')";
$rs=mysqli_query($conn,$query);
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID to take Quiz</div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";


?>
</body>
</html>

