<?php
define ('SIZE', 100); // размер массива


function randomizeArray(&$array) // функция, которая для тестов заполняет наш массив рандомными значениями от 0 до 9. принимает в качестве аргумента массив по ссылке
{
    for ($i=0;$i<SIZE;$i++)
    {
        $array[$i]=rand(0,9);
    }
}

function printArray($array) // функция, которая выводит изначальный массив. принимает массив в качестве аргумента
{
    for ($i=0;$i<SIZE;$i++)
    {
        print $array[$i].' ';
    }
}


function findRepeating($array) // функция, которая среди элементов изначального массива находит последовательные пары одинаковых элементов. принимает массив в качестве аргумента
{
    $count=0;
    for ($i=1;$i<SIZE;$i++)
    {
        if ($array[$i] == $array[$i - 1])
        {
            $count++;
        }
    }
    return $count;
}


$initialArr=array();
randomizeArray($initialArr);
print "Изначальный массив: <br>";
printArray($initialArr);
print '<br> Количество последовательных пар одинаковых элементов в случайном массиве из 100 элементов: ';
print findRepeating($initialArr);