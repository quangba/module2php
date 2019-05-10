<?php
class Node
{
    public $data;
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}
class LinkList
{
    private $firstNode;
    private $lastNode;
    private $count;
    function __construct()
    {
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }
    public function insertFirst($data)
    {
        $link = new Node($data);
        $link->next = $this->firstNode;
        $this->firstNode = $link;
        if ($this->lastNode == NULL)
            $this->lastNode = $link;
        $this->count++;
    }
    public function insertLast($data)
    {
        if ($this->firstNode != NULL) {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        } else {
            $this->insertFirst($data);
        }
    }
    public function totalNodes()
    {
        return  "số lần chèn số là: " . $this->count . "<br>";
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;
        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
}

$linkedList = new LinkList();
$linkedList->insertFirst(1);
$linkedList->insertFirst(2);
$linkedList->insertFirst(3);
$linkedList->insertLast(4);
$linkedList->insertLast(5);

$totalNodes = $linkedList->totalNodes();
$linkData = $linkedList->readList();
echo $totalNodes;
echo implode('-', $linkData);
