<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get" >
    <input type="number" name="number">
    <button>SUBMIT</button>
</form>

</body>
</html>
<?php
include_once "Stack.php";

if ($_SERVER['REQUEST_METHOD']== 'GET'){
    if (isset($_REQUEST['number'])){
        $number = $_REQUEST['number'];
        convertDecimalToBinary($number);
    }

}
function convertDecimalToBinary($number) {
    $stack = new Stack(100);
    while ($number/2 != 0) {
        $mod = $number%2;
        $stack->push($mod);
        $number = floor($number/2);
    }
    $str = "";
    $count = count($stack->stack);
    for ($i = 0; $i < $count; $i ++){
        $str = $str. $stack->pop();
    }
    echo $str;
}