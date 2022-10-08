<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_else_if</title>
</head>
<body>
    <?php
              $per = 111;
              if ($per >= 80 && $per <= 100)
                  {
                      echo "<h1>You are in merit.</h1>";           
                  }
                  elseif($per > 60 && $per < 80)
                  {
                      echo "<h1>You are in 1st class.</h1>";  
                  }
                  elseif($per > 45 && $per < 60)
                  {
                      echo "<h1>You are in 2nd class.</h1>";  
                  }
                  elseif($per > 30 && $per < 45)
                  {
                      echo "<h1>You are in 3nd class.</h1>";  
                  }
                  elseif($per < 30 )
                  {
                      echo "<h1>You are fail.</h1>";  
                  }
                  else
                  {
                    echo "<h1>Please Enter valid percentag.</h1>";  
                  }

    ?>
</body>
</html>