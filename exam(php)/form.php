<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form_with_php</title>
</head>
<body>
    <form method="POST">
        <input type="textbox" name="num1" placeholder="1"/><br><br>
        <input type="textbox" name="num2" placeholder="2"/><br><br>
        E-mail: <input type="text" name="email">
  
  <br><br>
  Website: <input type="text" name="website">
  
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
        <input type="submit" name="submit"/>
</form>
<?php
if(isset($_POST['submit']))
$num1=$_POST['num1'];
//$num2=$_POST['num2'];
//echo $num1+$num2;
?>
</body>
</html>