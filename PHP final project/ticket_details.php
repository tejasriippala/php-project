
<html>
<body>

<?php
$servername = "127.0.01";
$username = "tippa2";
$password = "oracle";
$databasename = "tippa2";
$name=$_POST['name'];
$route_name=$_POST['route_name'];
$train_name=$_POST['train_name'];
$timings=$_POST['timings'];
$day=$_POST['day'];
$class=$_POST['class'];

// TO Create connection
$connect = @mysql_connect($servername,$username,$password); 
mysql_select_db($databasename,$connect);// To connect to the database

$stmt = "INSERT INTO ticket_r(name,route_name,train_name,timings,day,class) VALUES ('$name','$route_name','$train_name','$timings','$day','$class')";  // SQL queryUsed to insert the data into the table
    	
	mysql_query($stmt);
	mysql_close($connect); 
?>
<p>
Reservation is successfull
</p><br>
<p>
Reload the home page and click the "TICKET" button to view all the ticket details.
</p>

</br>
<button name = "home" type="button"  onclick="window.location='railwayhomepage.php';">Home</button>

</body>
</html>