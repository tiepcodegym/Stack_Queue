<?php
include_once 'Patient.php';
include_once 'Queue.php';

$queue=new Queue(10);
$patient=new Patient('Thanh',10);
$patient1=new Patient('Truong',8);
$patient2=new Patient('Han',1);
$patient3=new Patient('Hoang',1);
$patient4=new Patient('Truong',10);
$patient5=new Patient('Ha',3);

$queue->enqueue($patient);
$queue->enqueue($patient1);
$queue->enqueue($patient2);
$queue->enqueue($patient3);
$queue->enqueue($patient4);
$queue->enqueue($patient5);
$queue->dequeue();
$queue->readList();





