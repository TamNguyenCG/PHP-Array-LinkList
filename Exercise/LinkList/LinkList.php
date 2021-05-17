<?php
include_once "Node.php";

class LinkList
{
    public $count;
    public $firstNode;
    public $lastNode;

    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = null;
        $this->lastNode = null;
    }

    public function addFirstNode($data): void
    {
        $node = new Node($data);
        if (!$this->firstNode) {
            $this->firstNode = $node;
            $this->lastNode = $node;
        } else {
            $node->link = $this->firstNode;
            $this->firstNode = $node;
        }
        $this->count++;
    }

    function addLastNode($data)
    {
        if (!$this->firstNode) {
            $this->addFirstNode($data);
        } else {
            $node = new Node($data);
            $this->lastNode->link = $node;
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function add($index, $data)
    {
        if ($index == 0) {
            $this->addFirstNode($data);
        } else {
            $node = new Node($data);
            $preNode = $this->firstNode;
            $currNode = $this->firstNode;

            for ($i = 1; $i < $index; $i++) {
                $preNode = $currNode;
                $currNode = $preNode->link;
            }

            $tempLink = $currNode->link;
            $currNode->link = $node;
            $node->link = $tempLink;
        }
    }

    public function removeIndex($index)
    {
        if ($this->count == 0) {
            echo "LinkList is Empty";
        } elseif ($index == 0) {
            $preNode = $this->firstNode;
            $currNode = $this->firstNode;

            $currNode = $currNode->link;
            $preNode->link = null;
            $this->firstNode = $currNode;
        }else{
            $preNode = $this->firstNode;
            $currNode = $this->firstNode;

            for ($i = 1; $i < $index; $i++) {
                $preNode = $currNode;
                $currNode = $preNode->link;
            }
            $preNode->link = $currNode->link;
            $currNode->link = null;
        }
    }

    public function removeObj($obj)
    {

        $node = new Node($obj);
        $preNode = $this->firstNode;
        $currNode = $this->firstNode;
        do{
            $preNode = $currNode;
            $currNode = $preNode->link;
        }while($obj != $currNode->readNode());

        $preNode->link = $currNode->link;
        $currNode->link = null;
    }

    public function size(): int
    {
        return $this->count;
    }
}