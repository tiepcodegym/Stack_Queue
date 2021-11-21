<?php
include_once "Stack.php";
include_once 'Linklist.php';
include_once 'Node.php';

$myBooks = new stack();

$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords');
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');
echo $myBooks->pop() . '<br>';
echo $myBooks->pop() . '<br>';
echo $myBooks->pop() . '<br>';
$myBooks->push('A Game of Thrones');
$myBooks->push('A Game of Thrones');
echo $myBooks->pop() . '<br>';
echo $myBooks->pop() . '<br>';
echo $myBooks->pop() . '<br>';
echo $myBooks->pop() . '<br>';
if ($myBooks->isEmpty()) {
    echo 'Stack is empty<br>';
} else {
    echo 'Stack is not empty<br>';
}
