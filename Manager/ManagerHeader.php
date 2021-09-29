<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="ManagerHome.php"><p style="font-family: 'Times New Roman', Times, serif; font-size: 20px">Restaurantholic</p></a>
    </div>
    <ul class="nav navbar-nav" style="font-family: 'Times New Roman', Times, serif; font-size: 20px">
      <li class="active"><a href="ManagerHome.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Functions <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="EditMenu.php">Edit Menu</a></li>
          <li><a href="TableOrder.php">Table Order</a></li>
          <li><a href="TableManagement.php">Table Management</a></li>
          <li><a href="GenerateReportMenu.php">Generate Report</a></li>
          <li><a href="GenerateBill.php">Generate Bill</a></li>
          <li><a href="ManageUsers.php">Manage Users</a></li>
          <li><a href="ManagerProfile.php">Edit Profile</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
  

</body>
</html>