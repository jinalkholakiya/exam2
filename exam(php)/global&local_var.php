<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global & Local variable</title>
</head>
<body>
    <?php
        $x = 100;
        function test()
        {
            global $x;
            echo "variable X is inside function : $x <br>";
        }

        test();
        echo "variable X is outside function :$x";

?>
</body>
</html>