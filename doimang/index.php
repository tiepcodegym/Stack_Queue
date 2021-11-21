<?php
include_once 'stack.php';
$arr=[1,4,5,6,8,9,5];
$stack=new Stack();
for ($i=0;$i<count($arr);$i++)
{
    $stack->push($arr[$i]);
}
for ($i=0;$i<count($arr);$i++)
{
    $arr[$i]=$stack->pop();
}
var_dump($arr);