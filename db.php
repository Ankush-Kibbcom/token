<?php
$username = $_POST['NAME'];
$password = $_POST['PASSWORD'];


$username = stripcslashes($username);
$password = stripcslashes($password);

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("http://opendata-mysql1.a3c1.starter-us-west-1.openshiftapps.com","user","pass");
mysql_select_db("sampledb");

$result = mysql_query("select * from Login where NAME = '$username' and PASSWORD = '$password'") 
or die("Failed to query database" .mysql_error());

$row = mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password){
	echo "Login Succesfull" .$row['username'];
}
else{
	echo "Login Unsuccesfull";
}
?>