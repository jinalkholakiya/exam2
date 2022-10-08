 <!-- <?php 
$conn = mysqli_connect('localhost','root','','crud_db') or die("conection fail");
$db = "CREATE DATABASE IF NOT EXISTS crud_db";
$query = mysqli_query($conn,$db);
if($query){
    echo "conected....";
}
else{
    echo "something went wrong..";
}
// if($_server['REQUEST_METHOD'] == 'POST')
// {
//   $conn = mysqli_connect('localhost','root','','test');
//   $sql="insert into student (`sid`,`sname`,`saddress`,`sclass`,`sphone_no`) values('','nidhi','navasari','btech','9078653425')";
//   $result=mysqli_query($conn,$sql);
//   if($result){
//       echo "<br> data inserted";
//   }else{
//       echo "data not inserted";
//   }
// }
// ?>  -->
<?php
  $con=mysqli_connect('localhost','root','','crud_db');
  $fname=$add=$class=$phno="";
  if(isset($_GET['id'])){
    
    $qry="select * from student_tbl where sid=".$_GET['id'];
    $result=mysqli_query($con,$qry);
    $data=mysqli_fetch_assoc($result);
    $fname=$data['sname'];
    $add=$data['saddress'];
    $class=$data['sclass'];
    $phno=$data['sphone'];
  }
  if(isset($_POST['btn']))
  {
    if(isset($_GET['id']))
	{
		
      $qry="update student_tbl set sname='".$_POST['fname']."',saddress='".$_POST['add']."',sclass='".$_POST['class']."',sphone='".$_POST['number']."' where sid=".$_GET['id'];
       mysqli_query($con,$qry);
  
    }else
	{
		
       $qry= "insert into student_tbl values(NULL,'".$_POST['fname']."','".$_POST['add']."','".$_POST['class']."','".$_POST['number']."')";
       mysqli_query($con,$qry);
    }
  }
  
  ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP CRUD</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
     
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container my-5">
    <h2>Add a work</h2>
    <form method="POST"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Student name" name="fname" value="<?php echo $fname?>">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Address</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="student address" rows="3" name="add"><?php echo $add?></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">class</label>
    <input type="txt" class="form-control" id="class" placeholder="student class" name="class" value="<?php echo $class?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone Number</label>
    <input type="text" class="form-control" id="pn" placeholder="student phone-number" name="number" value="<?php echo $phno?>">
  </div>
 <center>
  <button type="submit" class="btn btn-primary" name="btn">Submit</button>
</center>
</form>
</div>
<div class="container">
  <?php
  $sql = "select * from `student_tbl`";
  $result = mysqli_query($conn,$sql);
  
  while($row = mysqli_fetch_assoc($result)){
    // echo $row['sid']  . $row['sname'] .  $row['saddress'] .  $row['sclass'] .  $row['sphone'];
    // echo "<br>";
  }?>
  <html lang="en">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Class</th>
      <th scope="col">Phone No</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql = "select * from `student_tbl`";
  $result = mysqli_query($conn,$sql);
  
  while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo  $row['sid']; ?></td>
      <td><?php echo $row['sname'];?></td>
      <td><?php echo $row['saddress'];?></td>
      <td><?php echo $row['sclass'];?></td>
      <td><?php echo $row['sphone'];?></td>
      <td>
        
      <button class="btn btn-primary"><a href="php_crud.php?id=<?php echo $row['sid'];?>">update</a>  
      <button class="btn btn-primary"><a href="delete.php?sid=<?php echo $row['sid'];?>">delete</a></td>
     
  </tr>
<?php  
  
  }
   ?>
  
  </tbody>
</table>
</html>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
