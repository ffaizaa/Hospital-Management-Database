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
$Dept_name=$_POST['Dept_name'];
$Num_of_patient=$_POST['Num_of_patient'];
$sql = "INSERT INTO department(Dept_name, Num_of_patient)
VALUES ('$Dept_name', '$Num_of_patient')";



if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Data Entry Succesful');</script>";
  echo "<script>document location = 'CSEproject311/Department_form.html';</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>