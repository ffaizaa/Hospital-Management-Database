<?php
require_once('database.php');
$query = "select * from receptionist";
$result= mysqli_query($con,$query);
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptionist Table </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="view_table.css">
</head>
<body>

<h2>RECEPTIONIST USERS</h2>

<table>
  <tr>
    <th>R_ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>Salary</th>
    <th>PHONE_NUMBER</th>
    <th>DESK_NUMBER</th>
  </tr>
  <tr>
   <?php
   while($row= mysqli_fetch_assoc($result))
   {
    ?>
    <td><?php echo $row['R_ID'];?></td>
    <td><?php echo $row['FIRST_NAME'];?></td>
    <td><?php echo $row['LAST_NAME'];?></td>
    <td><?php echo $row['Salary'];?></td>
    <td><?php echo $row['PHONE_NUMBER'];?></td>
    <td><?php echo $row['DESK_NUMBER'];?></td>
  </tr> 
   <?php
   }
   ?> 
  
  
</table>
<a href="receptionist_form.html"><button>Add New User</button></a>
</body>
</html>