<!DOCTYPE html>
<html>
<head>
<title>All Functions</title>
<meta http-equiv="Content/Type" content="text/html; charset=iso-8859-1">  <!-- Folow Ajax code -->
<link rel='stylesheet' type='text/css'>                                   <!-- Folow CSS code -->
<style>
</style>
</head>
<body style="background-color:#ECF0F1  ">




<!-- Ajax for     update,insert,delete and display a web page without reloading the page   -->
<div id="getdata"></div>

<script type="text/javascript">

function dis() {
  xmlhttp=new XMLHttpRequest(); 
  xmlhttp.open("GET", "folowindex.php", false);
  xmlhttp.send(null);
  document.getElementById("getdata").innerHTML=	xmlhttp.responseText;
  
}
dis();

setInterval(function(){dis();},2000);
</script>



</body>
</html>