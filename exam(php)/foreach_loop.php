<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach_loop</title>
</head>
<body>
    <?php
//1.))

// $array = array(10,20,30);
// foreach($array as $value)
// {
//     echo $value . "<br>";
// }

//2.))
// $array = [
//     "hello",
//     "jinal",
//     "tete"];
// foreach($array as $value)
// {
//     echo $value . "<br>";
// }

//3.))
        // $age =
        //     [
        //         "jin" => 10,
        //         "jim" => 20,
        //         "hill" => 30
        //     ]; 
        //     foreach($age as $value)
        //     {
        //         echo $value . "<br>";
        //     }

//4.))
        $age =
            [
                "jin" => 10,
                "jim" => 20,
                "hill" => 30
            ]; 
            foreach($age as $key =>  $value)
            {
                echo $key . "=" . $value . "<br>";
            }

?>
</body>
</html>