<?php
include_once 'Data.php';
const DEFAULT_CAPACITY = 10;

class MyList extends Data
{
    public $size = 0;
    public $capacity = 0;
    public $maxCapacity = DEFAULT_CAPACITY;
    public $arrayList;

    public function __construct($arr = '')
    {
        if (is_array($arr)) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }

    }

    function remove($value)
    {
        $index = 0;
        for ($i = 0; $i < count($this->arrayList); $i++) {
            if ($this->arrayList[$i] == $value) {
                $index = $i;
            }
        }
        unset($this->arrayList[$index]);
    }

    function add($index, $data)
    {
        if ($this->isCapacityFull()) {
            die('The capacity is full. Can not add');
        } elseif ($this->isEmptyArray() || $this->isIndexBiggerThanCountArray($index)) {
            array_push($this->arrayList, $data);
        } else {
            $newArray = array();
            for ($i = 0; $i < $index; $i++) {
                $newArray[] = $this->arrayList[$i];
            }
            $newArray[] = $data;
            for ($i = $index; $i < count($this->arrayList); $i++) {
                $newArray[] = $this->arrayList[$i];
            }

            $this->arrayList = $newArray;
            $this->setCapacity(count($this->getArrayList()));

        }
    }

    function update($value, $data)
    {
        for ($i = 0; $i < count($this->getArrayList()); $i++) {
            if ($this->arrayList[$i] == $value) {
                $this->arrayList[$i] = $data;
            }
        }
    }

    public function getArrayList()
    {
        return $this->arrayList;
    }

    public function getSize()
    {
        return count($this->arrayList);
    }

    public function isEmptyArray()
    {
        return count($this->arrayList) <= 0;
    }

    public function isIndexBiggerThanCountArray($index)
    {
        return $index > count($this->arrayList);
    }

    public function isCapacityFull()
    {
        if ($this->getCapacity() >= $this->maxCapacity) {
            return true;
        }
        return false;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    public function getCapacity()
    {
        return $this->capacity;
    }
}