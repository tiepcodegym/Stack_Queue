<?php

class Linkedlist
{
    private $firstNode;
    private $lastNode;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addPatient(object $Patient)
    {
        $current = $this->firstNode;
        if ($this->firstNode == null ) {
            $this->insertFirst($Patient);
        }
        while (!is_null($current)) {
            if (null == $current->next ) {
                $this->insertLast($Patient);
                break;

            }
            if ($Patient->code < $current->next->code) {
                $Patient->next = $current->next;
                $current->next = $Patient;
                break;
            }
            $current = $current->next;
        }
    }

    private function insertFirst($data): void
    {
        $data->next = $this->firstNode;
        $this->firstNode = $data;

        if (is_null($this->lastNode)) {
            $this->lastNode = $data;
        }
    }

    public function insertLast($data): void
    {
        if (!is_null($this->firstNode)) {
            $this->lastNode->next = $data;
            $data->next = null;
            $this->lastNode = $data;
        }
    }
    public function readList(): array
    {
        $listData = [];
        $current = $this->firstNode;

        while (!is_null($current)) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    public function dequeue()
    {
        $data = $this->firstNode->readNode();
        $this->firstNode = $this->firstNode->next;
        return $data;
    }
}
