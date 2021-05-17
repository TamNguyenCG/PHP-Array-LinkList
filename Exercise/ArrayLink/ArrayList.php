<?php
namespace Arraylist;

use JetBrains\PhpStorm\Pure;

class ArrayList
{
    public array $elements;
    public array $originalArray;
    public int|float $size;

    public function __construct(array $array, int|float $size)
    {
        $this->elements = $array;
        $this->originalArray = $array;
        $this->size = $size;
    }

    public function size(): int
    {
        return count($this->elements);
    }

    #[Pure] public function isFull(): bool
    {
        if ($this->size < $this->size()) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($index, $obj): void
    {
        $this->elements[$index] = $obj;
    }

    public function add($obj): void
    {
        if ($this->size > $this->size()) {
            array_push($this->elements, $obj);
        } else {
            echo "ArrayList is full";
        }
    }

    public function remove($index): void
    {
        array_splice($this->elements, $index, 1);
    }

    public function get($index): object
    {
        return $this->elements[$index];
    }

    public function clear(): void
    {
        unset($this->elements);
    }

    public function addAll($arr): array
    {
        if ($this->isFull()) {
            echo "List is full";
        }
        return array_merge($this->elements, $arr);
    }

    public function indexOf($obj): int
    {
        return $this->elements[$obj];
    }

    #[Pure] public function isEmpty(): bool
    {
        return empty($this->elements);
    }

    public function sort(): array
    {
        sort($this->elements);
        return $this->elements;
    }

    public function reset(): void
    {
        $this->elements = $this->originalArray;
    }
}