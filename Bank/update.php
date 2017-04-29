<!DOCTYPE html>
<html>
<head>
<title>All Functions</title>                                     
<style>
h2{
	color: #808080;
	 text-decoration: underline;	 
}
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

</style>
</head>
<body style="background-color:#AAAEAF">

<?php

echo "<h2>You gonna update information about this customer</h2>";

function callUpdate()
{
	$id= $_GET['id'];
	if(isset($_POST['update']))
	{
	$conn=new mysqli('localhost','root','','generaldb');
	
	$var2=$_POST['name'];
	$var3=$_POST['age'];
	$var4=$_POST['born'];
	
	$stm=$conn->prepare("UPDATE tableall SET name=?, age=?, born=? WHERE id=? ");
	$stm->bind_param('ssss', $var2,$var3,$var4,$id);
	$stm->execute();
	echo"You updated succefully";
	$stm->close();
	$conn->close();
	
	
	echo"<br><br><br>"; echo "<a href='javascript:history.go(-2)'><input type='button' value='Back' class='btn'></a>";
	exit(1);
	exit(0376);
	
}
}
callUpdate();
?>

<form action="" method="post">

<?php echo $_GET['id'] ?>
<br><br>
<b>Name</b><br>
<input type="text" name="name">
<br>
<b>Age</b><br>
<input type="text" name="age">
<br>
<b>Born</b><br>
<input type="text" name="born">
<br><br><br>

<input type="submit" value="Update" name="update" class="btn">

</form>

</body>
</html>