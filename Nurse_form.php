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
$N_ID=$_POST['N_ID'];
$FIRST_NAME=$_POST['FIRST_NAME'];
$LAST_NAME=$_POST['LAST_NAME'];
$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
$EXPERIENCE=$_POST['EXPERIENCE'];
$WORKING_SHIFT=$_POST['WORKING_SHIFT'];
$SALARY=$_POST['SALARY'];
$sql = "INSERT INTO nurse(N_ID, FIRST_NAME, LAST_NAME, PHONE_NUMBER, EXPERIENCE, WORKING_SHIFT, SALARY)
VALUES ('$N_ID', '$FIRST_NAME', '$LAST_NAME','$PHONE_NUMBER', '$EXPERIENCE','$WORKING_SHIFT','$SALARY')";



if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Data Entry Succesful');</script>";
  echo "<script>document location = 'CSEproject311/Nurse_form.html';</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>