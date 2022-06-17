<?php

class Movie {
  private $title;
  public $description;
  public $release_year;
  public $poster;

  public function __construct($_title, $_description, $_release_year, $_poster){

    $this->title = $_title;
    $this->description = $_description;
    $this->release_year = $_release_year;
    $this->poster = $_poster;
  }
  
  public function getTitle(){
    return $this->title;
  }
}