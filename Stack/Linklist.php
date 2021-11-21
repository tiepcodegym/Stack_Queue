<?php


class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;

    function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }

    public function insertFirst($data): void
    {
        $node = new Node($data);
        $node->next = $this->firstNode;
        $this->firstNode = $node;

        if (is_null($this->lastNode)) {
            $this->lastNode = $node;
        }

        $this->count++;
    }

    public function insertLast($data): void
    {
        if (!is_null($this->firstNode)) {
            $node = new Node($data);
            $this->lastNode->next = $node;
            $node->next = null;
            $this->lastNode = $node;
            $this->count++;
        } else {
            $this->insertFirst($data);
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

    public function deleteLast()
    {
        $current = $this->firstNode;
        $listData = $this->firstNode;
        while (!is_null($current)) {
            if ($current->next == $this->lastNode) {
                $listData =$current->next->readNode();
                $current->next=null;
                $this->lastNode=$current;
                return $listData;
                }
            $current = $current->next;
        }
    }
    public function outLast()
    {
        $current = $this->firstNode;
        $listData = $this->firstNode;
        while (!is_null($current)) {
                $listData = $current->readNode();
            $current = $current->next;
        }
        return $listData;
    }
}