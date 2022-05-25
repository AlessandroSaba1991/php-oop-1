<?php

class Movie{
    public $title;
    public $genre;
    public $language;
    function __construct($title,$genre,$language) {
        $this->title = $title;
        $this->genre = $genre;
        $this->language = $language;
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
};