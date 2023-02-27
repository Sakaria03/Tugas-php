<?php

$kata = "kasur rusak";

var_dump($kata);

if ($kata == strrev($kata)){
    echo "Kata tersebut adalah palindrom";
}else{
    echo "Kata tersebut bukan palindrom";
}