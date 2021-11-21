<?php

class Queue
{
    public array $queue;
    public int $limit;

    public function __construct(int $limit)
    {
        $this->queue = [];
        $this->limit = $limit;
    }

    public function enqueue($data)
    {
        if ($this->limit > count($this->queue)) {
            array_push($this->queue, $data);
        } else {
            echo 'Patient list was full';
        }
    }

    public function dequeue()
    {
        if (!empty($this->queue)) {
            $this->nurse();
        } else {
            echo 'Tan làm đi anh';
        }
    }

    public function nurse()
    {
        $index = 0;
        $minCode = $this->queue[$index]->code;
        for ($i = 0; $i < count($this->queue); $i++) {
            if ($this->queue[$i]->code < $minCode) {
                $index = $i;
                $minCode = $this->queue[$index]->code;
            }
        }
        $item=$this->queue[$index];
        array_splice($this->queue, $index, 1);
        return $item;
    }

    public function readList():void
    {
        echo '<pre>';
        while (!empty($this->queue)) {
            echo $this->nurse()->showInfo().'<br>';
        }
    }
}