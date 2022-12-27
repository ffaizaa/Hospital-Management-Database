<?php
require_once('database.php');
$query = "select * from department";
$result= mysqli_query($con,$query);
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Department Table </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="view_table.css">
</head>
<body>

<h2>DEPARTMENT USERS</h2>

<table>
  <tr>
    <th>Dept_name</th>
    <th>Num_of_patient</th>
    
  </tr>
  <tr>
   <?php
   while($row= mysqli_fetch_assoc($result))
   {
    ?>
    <td><?php echo $row['Dept_name'];?></td>
    <td><?php echo $row['Num_of_patient'];?></td>
    
  </tr> 
   <?php
   }
   ?> 
  
  
</table>
<a href="Department_form.html"><button>Add New User</button></a>
</body>
</html>