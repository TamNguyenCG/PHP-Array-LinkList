<?php


class ArrayList
{
    public array $arrayList;
    public function __construct()
    {
        $this->arrayList = [];
    }

    public function add($obj): void
    {
        array_push($this->arrayList,$obj);
    }

    public function get($index)
    {
        return $this->arrayList[$index];
    }

    public function size(): int
    {
        return count($this->arrayList);
    }
}