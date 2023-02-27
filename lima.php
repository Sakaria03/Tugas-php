<?php

$tahun = 2008;

var_dump($tahun);

if(($tahun % 4== 0 && $tahun % 100 !=0)|| $tahun % 400 == 0){
    echo "Tahun ini merupakan tahun kabisat";
}else{
    echo "Tahun ini bukan tahun kabisat";
}
