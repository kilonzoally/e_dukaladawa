<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>the new paragraph</p>
	<?php
   if(!isset($_POST['submit'])){
   	$firstname = $_POST['first'];
   echo "firstname:" .$firstname. "<br>";
   $lastname = $_POST['last'];
   echo "lastname" .$lastname. "<br>" ;
}
	?>

</body>
</html>