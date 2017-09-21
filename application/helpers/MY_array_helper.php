<?php

//Criei essa funcao, pois a nativa do PHP não preserva os indices originais dos arrays =)
function my_array_merge($array1, $array2)
{
    $new_array = array();
    foreach($array1 as $key => $value){
        $new_array[$key] = $value;
    }
    foreach($array2 as $key => $value){
        $new_array[$key] = $value;
    }
    return $new_array;
}
    
