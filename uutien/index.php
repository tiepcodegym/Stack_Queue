<?php
include_once 'Linkedlist.php';
include_once 'Patient.php';
$List=new Linkedlist();
$Patient=new Patient('abala trap',8);
$List->addPatient($Patient);
$Patient=new Patient('Thanh dep trai lam',2);
$List->addPatient($Patient);
$Patient=new Patient('Thanh dep trai lam luon',3);
$List->addPatient($Patient);
$Patient=new Patient('Thanh dep trai lam luon ne',2);
$List->addPatient($Patient);
var_dump($List->readList());