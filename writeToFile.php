<?php

function writeToFile($fileName, $data, $args = [])
{
    $data = call_user_func_array($data, $args);
    $myfile = fopen($fileName, "w+");
    fwrite($myfile, $data);
    fclose($myfile);
}
