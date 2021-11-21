<?php

class Queue
{
    public array $queue;
    public int $limit;

    public function __construct(int $limit = 100)
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
        $data=$this->queue[0];
        array_splice($this->queue, 0, 1);
        return $data;
    }

}