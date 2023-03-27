<?php
$time = 2023 - $argv[2];
echo "Your name is " , $argv[1] , ", " , "and your age is " , $time,"\n";
if ($time >= 18){
    echo "You can legally vote","\n";
}
if ($time >=60){
    echo "You are a senior citizen","\n";
}
?>