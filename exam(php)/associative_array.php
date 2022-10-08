<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative_array</title>
</head>
<body>
    <?php
//1.))   NOTE :-
// () round breaket  hoy tayari j $age =array lakhavanu........
//     $age =array
//     (
//         "jin" => 10,
//         "jim" => 20,
//         "hill" => 30
//     );
// echo $age["hill"] . "<br>";
// echo $age["jin"] . "<br>";
// echo $age["jim"] . "<br>";

//2.)) NOTE :-
// squre breaket hoy to $age =array lakhvanu na hoy.......
        // $age =
        //     [
        //         "jin" => 10,
        //         "jim" => 20,
        //         "hill" => 30
        //     ]; 
        // echo $age["hill"] . "<br>";
        // echo $age["jin"] . "<br>";
        // echo $age["jim"] . "<br>";

//3.))
        //  $age = array
        //             (
        //                 "tete" => "jinal",
        //                 "v" => 23.55,
        //                 "hill" => 30
        //             );
        //         echo $age["hill"] . "<br>";
        //         echo $age["tete"] . "<br>";
        //         echo $age["v"] . "<br>";
        //         echo "<pre>";
        //             var_dump($age);
        //             echo "</pre>";

//4.))
                $age = array
                (
                    1 => "jinal",
                    2 => 23.55,
                    3 => 30,
                    "hill" => "jin"
                );
                echo $age[1] . "<br>";
                echo $age[2] . "<br>";
                echo $age[3] . "<br>";
                echo $age["hill"] . "<br>";
                echo "<pre>";
                var_dump($age);
                echo "</pre>";        
?>
</body>
</html>