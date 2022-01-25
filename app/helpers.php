<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

function changeDateFormate($value, $array){
    $bool=false;
    foreach ($array as $m){
        if ($m->idPost == $value){
            $bool=true;
            break;
        }
    }
    return $bool;

}
function numberLike($value,$array){
    $bool=0;
    foreach ($array as $m){
        if ($m->idPost == $value){
            $bool +=1;
        }
    }
    return $bool;

}
function numberComment($value,$array){
    $bool=0;
    foreach ($array as $m){
        if ($m->idPost == $value){
            $bool +=1;
        }
    }
    return $bool;

}
function numberReplay($value,$array){
    $bool=0;
    foreach ($array as $m){
        if ($m->idComment == $value)
        {
            $bool +=1;
        }
    }
    return $bool;

}

