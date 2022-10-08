<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goto_statement</title>
</head>
<body>
    <?php
// goto statement no use kari n aapde koy pan contiune statement n break kari n beju statement lakhi sakiye cheye.....    
     for($a =1; $a<=10 ;$a++)
            {
                    if($a == 3)
                    {
                        goto abc;    
                    }
                    echo $a . "<br>" ;
            }
            echo "hello";
            abc:
            echo "hello good day.";

?>
</body>
</html>