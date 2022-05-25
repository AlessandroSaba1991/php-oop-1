<?php

class Movie{
    public $title;
    public $genre;
    public $language;
    public $image;
    function __construct($title,$genre,$language,$image) {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
        $this->image = $image;
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
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
};