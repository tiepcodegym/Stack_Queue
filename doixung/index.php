<?php
include_once 'stack.php';
include_once 'queue.php';
?>
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
    <form action="" method="post">
        <input type="text" name="inp">
        <button>Submit</button>
    </form>
    </body>
    </html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $str = $_POST['inp'];
    $stack = new Stack();
    $queue = new Queue();
    for ($i = 0; $i < strlen($str); $i++) {
        $stack->push($str[$i]);
        $queue->enqueue($str[$i]);
    }
    $flag = true;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($stack->pop() != $queue->dequeue()) {
            $flag = false;
            break;
        }
    }
    if ($flag) {
        echo 'doi xung';
    } else {
        echo 'khhong doi xung';
    }

}
