<!DOCTYPE html>
<html>
<head>
<title>All Functions</title>
<link rel='stylesheet' type='text/css'>           <!-- Folow CSS code -->
<style>

table {
    border-collapse: collapse;
    width: 35%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

.btn{
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

h2{
	color: #808080;
	 text-decoration: underline;	 
}

</style>
</head>
<body style="background-color:#AAAEAF">
<?php

echo"<h2>You Gonna Delete This Customer</h2>";
echo"<br><br><br>";



function callDelete()
{
	
	
		$id = $_GET['id'];                                         // To show all the line for this name
		$nameofdatabase=mysqli_connect('localhost','root','', 'generaldb');
		$sql="SELECT * FROM tableall where id = $id ";  /* Add this condition */
		$result = mysqli_query($nameofdatabase, $sql);



		echo "<table border='2' ,align='center' >";
		echo "<tr><td>ID</td><td>Name </td><td>Age</td><td>Born</td></tr>";
		while($row= mysqli_fetch_array($result))
		{
		echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['age']}</td><td>{$row['born']}</td></tr>";
		}
		echo "</table>";
		echo"<br><br><br>";

								$id = $_GET['id'];                      // To delete this line for the name

								$nameofdatabase=mysqli_connect('localhost','root','', 'generaldb');
								$sql="DELETE FROM tableall where id = $id ";  
								$result = mysqli_query($nameofdatabase, $sql);
								echo"<br><br><br>";
								
		
}

callDelete();

echo"<br><br><br>"; echo "<a href='javascript:history.go(-1)'><input type='button' value='Back' class='btn' ></a>";   /*To take me back to main page... */


?>
</body>
</html>