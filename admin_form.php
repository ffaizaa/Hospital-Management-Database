<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " .mysqli_connect_error());
}
$A_ID=$_POST['A_ID'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$sql = "INSERT INTO admin(A_ID, first_name, last_name) 
VALUES ('$A_ID', '$first_name', '$last_name')";

if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Data Entry Succesful');</script>";
  echo "<script>document location = 'CSEproject311/admin_form.html';</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>