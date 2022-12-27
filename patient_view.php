<?php
require_once('database.php');
$query = "select * from patient";
$result= mysqli_query($con,$query);
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Table </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="view_table.css">
</head>
<body>

<h2>PATIENT USERS</h2>

<table>
  <tr>
    <th>P_ID</th>
    <th>FIRST_NAME</th>
    <th>LAST_NAME</th>
    <th>BILL</th>
    <th>PHONE_NUMBER</th>
    <th>ADDRESS</th>
    <th>DISEASE</th>
    <th>CABIN_NO</th>
    <th>PATIENT_TYPE</th>
    <th>FROM_DATE</th>
    <th>TO_DATE</th>
 </tr>
  <tr>
   <?php
   while($row= mysqli_fetch_assoc($result))
   {
    ?>
    <td><?php echo $row['P_ID'];?></td>
    <td><?php echo $row['FIRST_NAME'];?></td>
    <td><?php echo $row['LAST_NAME'];?></td>
    <td><?php echo $row['BILL'];?></td>
    <td><?php echo $row['PHONE_NUMBER'];?></td>
    <td><?php echo $row['ADDRESS'];?></td>
    <td><?php echo $row['DISEASE'];?></td>
    <td><?php echo $row['PATIENT_TYPE'];?></td>
    <td><?php echo $row['CABIN_NO'];?></td>
    <td><?php echo $row['FROM_DATE'];?></td>
    <td><?php echo $row['TO_DATE'];?></td>
</tr> 
   <?php
   }
   ?> 
  
  
</table>
<a href="Patient_form.html"><button>Add New User</button></a>
</body>
</html>