<?php 
$input = $_POST['input'];
if(preg_match('/^((?=.*\d)(?=.*[A-Z])(?=.*\W).{8,})$/', $input))
{
    if (strpos($input, '123') || strpos(strtolower($input), 'qwerty') || strpos(strtolower($input), 'abc')) {
        echo 'false';
    }
    else{
        echo 'true';
    }
}
else{
    echo 'false';
}


?>