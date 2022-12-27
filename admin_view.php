<?php
require_once('database.php');
$query = "select * from admin";
$result= mysqli_query($con,$query);
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Table </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="view_table.css">
</head>
<body>

<h2>ADMIN USERS</h2>

<table>
  <tr>
    <th>A_ID</th>
    <th>first_name</th>
    <th>last_name</th>
  </tr>
  <tr>
   <?php
   while($row= mysqli_fetch_assoc($result))
   {
    ?>
    <td><?php echo $row['A_ID'];?></td>
    <td><?php echo $row['first_name'];?></td>
    <td><?php echo $row['last_name'];?></td>
  </tr> 
   <?php
   }
   ?> 
  
  
</table>
<a href="admin_form.html"><button>Add New User</button></a>
</body>
</html>