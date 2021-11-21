<?php

class stack
{
    protected object $LinkedList;

    public function __construct()
    {
        $this->LinkedList = new LinkList();
    }

    public function push($item): void
    {
        $this->LinkedList->insertLast($item);
    }

    public function pop()
    {
        if ($this->isEmpty()) {
            // trap for stack underflow
            throw new RunTimeException('Stack is empty!');
        } else {
            // pop item from the start of the array
            return $this->LinkedList->deleteLast();
        }
    }

    public function top()
    {
        return $this->LinkedList->outLast();
    }

    public function isEmpty(): bool
    {
        return empty($this->LinkedList->readList());
    }
}