<?php 
$conn = mysqli_connect('localhost','root','','php_db');
$db = "CREATE DATABASE IF NOT EXISTS php_db";
$query = mysqli_query($conn,$db);
if($query){
    echo "conected....";
}
else{
    echo "something went wrong..";
}

// insert query:-

// $sql="insert into data_tbl (`id`,`name`,`email`,`password`) values('','jinal','jinal@gmail.com','12345')";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo "<br> data inserted";
// }else{
//     echo "data not inserted";
// }

// update query:-

// $sql1="update data_tbl set password='4578' where id='4'";
// $result2=mysqli_query($conn,$sql1);
// if($result2){
//     echo "data updated";
// }

// delete query:-

// $sql2="delete from data_tbl where id=5";
// $result3=mysqli_query($conn,$sql2);
// if($result3){
//     echo "data deleted";
// }
?>


