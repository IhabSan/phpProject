<!DOCTYPE html>
<html>
<head>
<title>All Functions</title>                                     
<style>
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

echo "<h2>Insert a new customer</h2>";



function callInsert()
{

		if(isset($_POST['insert']))
		{
		$conn=new mysqli('localhost','root','','generaldb');

		$var2=$_POST['name'];
		$var3=$_POST['age'];
		$var4=$_POST['born'];
		$stm=$conn->prepare("INSERT INTO tableall (name , age, born)  VALUES (?,?,?)");
		$stm->bind_param("sss", $var2, $var3,$var4);
		$stm->execute();

		$stm->close();
		$conn->close();
		echo"<br><br><br>"; echo "<a href='javascript:history.go(-2)'><input type='button' value='Back' class='btn' ></a>";
			exit(1);
			exit(0376);
		}
}

callInsert();
?>

<form action="" method="post">
<br>
<b>Name</b><br>
<input type="text" name="name">
<br>
<b>Age</b><br>
<input type="text" name="age">
<br>
<b>Born</b><br>
<input type="text" name="born">
<br><br><br>

<input type="submit" value="Insert" name="insert" class="btn">

</form>


</body>
</html>