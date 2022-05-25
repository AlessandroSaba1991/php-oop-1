<?php
class About{
    public $title;
    public $genre;
    public $language;
    public $description;
    function __construct($title,$genre,$language,$description) {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->description = $description;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function getLanguage()
    {
        return $this->language;
    }
    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
};