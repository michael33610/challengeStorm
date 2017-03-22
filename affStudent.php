<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 22/03/17
 * Time: 21:40
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

foreach ($students as $key => $nom){
    printf("%-10s  -  %s\n",$key,$nom);

}

printf("\n%-10s  -  %s\n","moyenne",array_sum($students)/count($students,COUNT_NORMAL));



?>