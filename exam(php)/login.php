<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG_IN</title>
</head>
<style>
    body{
    background: powderblue;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
*{
    font-family: mv boli;
    box-sizing: border-box;
}
form{
    width: 500px;
    border:2px solid blue;
    padding :30px;
    background: #fff;
    border-radius: 15px;
}
h2{
    text-align: center;
    margin-bottom: 40px;
}
label{
    color: navy;
    font-size: 15px;
    padding :10px;
}
    </style>
<body>

<form method="POST" action="php_crud.php">  
        <center>
        <h2> LOG-IN </h2>
       
        <label>User Name:-</label>
        <input type="text" name="uname" placeholder="User Name" required >
        <br><br>
        <label>Password:-</label>
        <input type="Password" name="Password" placeholder="Password" required>
        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>
</center>
</form>
</body>
</html>