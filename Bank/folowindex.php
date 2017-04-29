<!DOCTYPE html>
<html>
<head>
<title>All Functions</title>
<link rel='stylesheet' type='text/css'>           <!-- Folow CSS code -->
<style>

table {
    border-collapse: collapse; 
}

th, td {
    text-align: left;
    padding: 6px;
	
}

tr:nth-child(even){background-color: #f2f2f2}

.StyleView, .StyleDelete, .StyleUpdate {
	  background-color: #555555;
    border: none;
    color: white;
    padding: 6px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 2px 1px;
    cursor: pointer;
	border-radius: 3px;
}
.StyleInsert{
	 background-color: #555555;
	padding: 9px 119px;
	font-size: 18px;
	 cursor: pointer;
	 border-radius: 5px;
	 margin: 2px 303px;
	 color: white;
	 
}

</style>
</head>
<body style="background-color:#E9E6FA">
<?php

$nameofdatabase=mysqli_connect('localhost','root','','generaldb');
$sql='select * from tableall';
$result=mysqli_query($nameofdatabase, $sql);


echo "<table border=1 style='width: 45%' >";
echo "<tr><th><b><center>ID</center></b></th><th><b>Name</b></th><th><b>Age</b></th><th><b>Born</b></tr>";

while($row=mysqli_fetch_array($result))
{
	echo "<tr> <td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['born']}</td>
		 <td><a href='viewfile.php?id={$row['id']} '><center><input type='button' value='View' class='StyleView'></center></a></td> 
		 <td><a href='deletefile.php?id={$row['id']} '><center><input type='button' value='Delete' class='StyleDelete'></center></a></td> 
		 <td><a href='update.php?id={$row['id']} '><center><input type='button' value='Update' class='StyleUpdate'></center></a></td>  </tr>";
		 
}
echo"</table>";
echo"<br>";
echo"<a href='insertfile.php?id={$row['id']} '><input type='button' value='Insert' class='StyleInsert'></a>";

?>

</body>
</html>