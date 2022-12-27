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
$L_ID=$_POST['L_ID'];
$FIRST_NAME=$_POST['FIRST_NAME'];
$LAST_NAME=$_POST['LAST_NAME'];
$SALARY=$_POST['SALARY'];
$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
$sql = "INSERT INTO laboratorist(L_ID, FIRST_NAME, LAST_NAME, SALARY, PHONE_NUMBER)
VALUES ('$L_ID', '$FIRST_NAME', '$LAST_NAME','$SALARY', '$PHONE_NUMBER')";



if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Data Entry Succesful');</script>";
  echo "<script>document location = 'CSEproject311/Laboratorist_form.html';</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>