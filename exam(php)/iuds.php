<!-- <?php
//insert query:-
?> -->

<?php
  $con=mysqli_connect('localhost','root','','crud_db');
  if(isset($_POST['btn'])){
    $qry= "insert into student_tbl values(NULL,'".$_POST['fname']."','".$_POST['add']."','".$_POST['class']."','".$_POST['number']."')";
    mysqli_query($con,$qry);
  }
  // while($row = mysqli_fetch_assoc($result)){
  //   // echo $row['sid']  . $row['sname'] .  $row['saddress'] .  $row['sclass'] .  $row['sphone'];
  //   // echo "<br>";
  //  echo " <tr>
  //   <th scope='row'>". $row['sid'] ."</th>
  //   <td>". $row['sname'] ."</td>
  //   <td>". $row['saddress'] ."</td>
  //   <td>". $row['sclass'] ."</td>
  //   <td>". $row['sphone'] ."</td>
  //   <td>"<button type="submit" class="btn btn-primary" name="btn">Submit</button>"</td>
  // </tr>";

  // }
  
  
  while($row=mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $row['sid'];?></td>
      <td><?php echo $row['sname'];?></td>
      <td><?php echo $row['saddress'];?></td>
      <td><?php echo $row['sclass'];?></td>
      <td><?php echo $row['sphone'];?></td>
      <td><button class="btn btn-primary" name="btn">update</button>
     <button class="btn btn-primary" name="btn">delete</button></td>
  </tr>
    <?php
    }
    ?>

