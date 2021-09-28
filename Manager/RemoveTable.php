<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Table</title>
</head>
<body>
<?php
		include "connectdb.php";
		
		$sql9 = "UPDATE tables SET Display = 'hidden' WHERE Table_ID = '9'";
		$sql10 = "UPDATE tables SET Display = 'hidden' WHERE Table_ID = '10'";
		$sql11 = "UPDATE tables SET Display = 'hidden' WHERE Table_ID = '11'";
		$sql12 = "UPDATE tables SET Display = 'hidden' WHERE Table_ID = '12'";
		
		mysqli_query($conn, $sql9);
		mysqli_query($conn, $sql10);
		mysqli_query($conn, $sql11);
		mysqli_query($conn, $sql12);
	
		if(mysqli_affected_rows($conn) <=0)
		{
		die("<script>alert('Fail! Didn't Add Tables!');window.history.go(-1);</script");
		}
		
		echo "<script>alert('Successfully Added Tables!')</script>";
		echo "<script>window.location.href='TableManagement.php';</script>";

		
	?>
</body>
</html>