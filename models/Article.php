<?php
class Article{
    // Thuộc tính

    private $id;
    private $title;
    private $summary;
    private $cat_name;
    private $hinhanh;


    public function __construct($id,$title, $summary,$cat_name,$hinhanh){
        $this->id= $id;
        $this->title = $title;
        $this->summary = $summary;
        $this->cat_name = $cat_name;
        $this->hinhanh = $hinhanh;
    }

    // Setter và Getter
    public function getHinhanh()
    {
        return $this->hinhanh;
    }
    public function setHinhanh($hinhanh)
    {
        $this->hinhanh = $hinhanh;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getCatName()
    {
        return $this->cat_name;
    }

    public function setCatName($cat_name)
    {
        $this->cat_name = $cat_name;
    }


}
?>