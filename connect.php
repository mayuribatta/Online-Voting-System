<?php

$connect = mysqli_connect("localhost", "root", "", "voting") or die("connection falled!");

if($connect){
     echo "Connected!";
}

else{
    echo "not Connected!";
}
?>