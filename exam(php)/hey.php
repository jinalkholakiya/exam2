<?php
if(isset($_post['uname'])  && (isset($_post['Password'])))
{
}
else
{
    header("location: login.php");
    exit();
}

?>