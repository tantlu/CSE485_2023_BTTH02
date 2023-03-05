<?php
class Category{
    private $id;
    private $name;

    public function __construct($id,$name)
    {
        $this->id = $id;
        $this->id = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getCatName()
    {
        return $this->name;
    }

    public function setCatName($name)
    {
        $this->name = $name;
    }
}