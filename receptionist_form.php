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
$R_ID=$_POST['R_ID'];
$FIRST_NAME=$_POST['FIRST_NAME'];
$LAST_NAME=$_POST['LAST_NAME'];
$DESK_NUMBER=$_POST['DESK_NUMBER'];
$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
$Salary=$_POST['Salary'];
$sql = "INSERT INTO receptionist(R_ID, FIRST_NAME, LAST_NAME, DESK_NUMBER, PHONE_NUMBER, Salary) 
VALUES ('$R_ID', '$FIRST_NAME', '$LAST_NAME', '$DESK_NUMBER','$PHONE_NUMBER', '$Salary')";

if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Data Entry Succesful');</script>";
  echo "<script>document location = 'CSEproject311/receptionist_form.html';</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>