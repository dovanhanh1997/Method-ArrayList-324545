<?php


Abstract class Data
{
    abstract function setCapacity($capacity);
    abstract function remove($value);
    abstract function add($index,$data);
    abstract function update($index,$data);

}