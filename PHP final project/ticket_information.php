<html>
<body>
<title>Ticket reservation information</title>
</center><table width="100%" border="2">
        <tr> 
          <td><strong><font color="#000000">name</font></strong></td>
          <td><strong><font color="#000000">route_name</font></strong></td>
          <td><strong><font color="#000000">train_name</font></strong></td>
          <td><strong><font color="#000000">timings</font></strong></td>
	  <td><strong><font color="#000000">day</font></strong></td>
	  <td><strong><font color="#000000">class</font></strong></td>
         </tr>
	<?PHP
	$servername = "127.0.01";
	$username = "tippa2";
	$password = "oracle";
	$databasename = "tippa2";

	$connect = mysql_connect('127.0.01','tippa2','oracle'); 
	mysql_select_db($databasename,$connect); //To connect to the database

	$stmt = "SELECT * from ticket_r"; //To get the table that is stored from the database
	$view = mysql_query($stmt);
	
	
	while($row = mysql_fetch_array($view)) //To display the table
    {
    ?>
        <tr> 
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['route_name']; ?></td>
          <td><?php echo $row['train_name']; ?></td>
		  <td><?php echo $row['timings']; ?></td>
          <td><?php echo $row['day']; ?></td>
		  <td><?php echo $row['class']; ?></td>
                    
        </tr>
	<?php
	}
	 mysql_close($connect); 
	?>
</table></center>
</br>
<button name = "home" type="button"  onclick="window.location='railwayhomepage.php';">Home</button>

</body>
</html>