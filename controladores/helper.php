<?php


//acomoda el array
function pre($algo){
    echo "<pre>";
    var_dump($algo);
    echo "</pre";
  }
  
//Dump and die
function dd($algo){
    pre($algo);
    exit;
}


?>