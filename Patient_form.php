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
$P_ID=$_POST['P_ID'];
$FIRST_NAME=$_POST['FIRST_NAME'];
$LAST_NAME=$_POST['LAST_NAME'];
$DISEASE=$_POST['DISEASE'];
$ADDRESS=$_POST['ADDRESS'];
$PHONE_NUMBER=$_POST['PHONE_NUMBER'];
$BILL=$_POST['BILL'];
$PATIENT_TYPE=$_POST['PATIENT_TYPE'];
$CABIN_NO=$_POST['CABIN_NO'];
$FROM_DATE=$_POST['FROM_DATE'];
$TO_DATE=$_POST['TO_DATE'];
$sql = "INSERT INTO patient(P_ID, FIRST_NAME, LAST_NAME, DISEASE, PHONE_NUMBER, ADDRESS, BILL, CABIN_NO, PATIENT_TYPE, FROM_DATE, TO_DATE)
VALUES ('$P_ID', '$FIRST_NAME', '$LAST_NAME', '$DISEASE','$PHONE_NUMBER','$ADDRESS', '$BILL', '$PATIENT_TYPE','$CABIN_NO','$FROM_DATE', '$TO_DATE')";



if(mysqli_query($conn,$sql))
{
  echo "<script>alert('Data Entry Succesful');</script>";
  echo "<script>document location = 'CSEproject311/Patient_form.html';</script>";
}
else{
  echo "<script>alert('Something Went Wrong');</script>";
}
?>