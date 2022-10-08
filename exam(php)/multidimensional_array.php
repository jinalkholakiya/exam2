<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multidimensional_array</title>
</head>
<body>
    <?php

//1.))
//output:-
//Array
// (
//     [0] => Array
//         (
//             [0] => 1
//             [1] => jinal
//             [2] => manager
//             [3] => 50000
//         )

//     [1] => Array
//         (
//             [0] => 2
//             [1] => jim
//             [2] => worker
//             [3] => 3000
//         )

//2.))    
    // $emp = array
    // (
    //     array(1,"jinal","manager",50000),
    //     array(2,"jim","worker",3000)
    // );
    // echo $emp[0][0] . "  ";
    // echo $emp[0][1]. "  ";
    // echo $emp[0][2]. "  ";
    // echo $emp[0][3]. "  ";
    // echo "<pre>";
    //     print_r($emp);
    //     echo "</pre>";

//3.))
    // $emp = array
    // (
    //     array(1,"jinal","manager",50000),
    //     array(2,"jim","worker",3000),
    //     array(3,"jin","HR",30800)
    // );
    // for($row = 0; $row < 3; $row++){
    //     echo "<p><b>Row number $row</b></p>";
    //     for($col = 0; $col < 4; $col++){
    //         echo $emp[$row][$col] . "  ";
    //     }
    //     echo "<br>";
    // }
    // // echo "<pre>";
    // //     print_r($emp);
    // //     echo "</pre>";

//4.))
        $emp = array
        (
            array(1,"Jinal","Manager",50000),
            array(2,"jim","Worker",3000),
            array(3,"Jin","HR",30800)
        );
        echo "<table border='2px' cellpadding='15px' cellspacing='3px'>";
        echo "<tr>
        <th>EMP_ID</th>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>SALARY</th>
            </tr>";
       foreach($emp as $v1){
        echo "<tr>";
        foreach($v1 as $v2){
            echo "<td> $v2 </td>". " ";
        }
        echo "</tr>";
       }
       echo "</table>";

//5.))
// $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// echo "<pre>";
// print_r(array_chunk($cars,3));
// echo "</pre>";
    
//6.))
// $a=array("Volvo"=>"XC90","BMW"=>"X5");
// if (array_key_exists("Volvo",$a))
//   {
//   echo "Key exists!";
//   }
// else
//   {
//   echo "Key does not exist!";
//   }

//7.))

// function myfunction($num)
// {
//   return($num*$num);
// }

// $a=array(1,2,3,4,5);
// echo "<pre>";
// print_r(array_map("myfunction",$a));
// echo "</pre>";

//8.))jaya dog che taya fido thy jay

// function myfunction($v)
// {
// if ($v==="Dog")
//   {
//   return "Fido";
//   }
// return $v;
// }

// $a=array("Horse","Dog","Cat");
// echo "<pre>";
// print_r(array_map("myfunction",$a));
// echo "</pre>";

//9.)) $a1 nd $a2 bani ma same name hoy to output ma same aavse othre wise different aavse.....

// function myfunction($v1,$v2)
// {
// if ($v1===$v2)
//   {
//   return "same";
//   }
// return "different";
// }

// $a1=array("Cow","Dog","Cat");
// $a2=array("Cow","Dog","Rat");
// print_r(array_map("myfunction",$a1,$a2));

//10.)) lower case ma hoy to lowre ma aavi and upper ma hoy to upper ma aavi......


// function myfunction($v) 
// {
// $v=strtoupper($v);
//   return $v;
// }

// $a=array("Animal" => "horse", "Type" => "mammal");
// print_r(array_map("myfunction",$a));

?>
</body>
</html>