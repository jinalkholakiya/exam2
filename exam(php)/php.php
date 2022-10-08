<!DOCTYPE HTML>  
<html>
<head>
<style>

</style>
</head>
<body>  

<?php

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="POST" action="#">  
  Student Name: <input type="text" name="name" required>
  
  <br><br>
 Student address: <textarea name="comment" rows="5" cols="40" required></textarea>
  
  <br><br>
  student claas: <input type="text" name="website" required>
 
  <br><br>
  phone number: <input type="text" name="website" required>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
 <br><br>
  
  <input type="submit" name="submit" value="Submit">  
</form>



<?php 
$conn = mysqli_connect('localhost','root','','crud_db') or die("conection fail");
$db = "CREATE DATABASE IF NOT EXISTS crud_db";
$query = mysqli_query($conn,$db);
if($query){
    echo "conected....";
}
else{
    echo "something went wrong..";
}

// insert query:-

// $sql="insert into student_tbl (`sid`,`sname`,`saddress`,`sclass`,`sphone`) values('','jinal','surat','bca','9825034862')";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo "<br> data inserted";
// }else{
//     echo "data not inserted";
// }


// $sql1="update student_tbl set sname='jinal' where sid='2'";
// $result2=mysqli_query($conn,$sql1);
// if($result2){
//     echo "data updated";
// }


?>
</body>
</html>