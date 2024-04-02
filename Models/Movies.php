<?php
class Movie
{
    public $title;
    public $originalTitle;
    public $year;
    public $length;
    public $overview;

    public $genre = [];

    public $director;
    public $poster;

    /**
     * __construct
     *
     * @param string $_title
     * @param string $_originalTitle
     * @param string $_year
     * @param string $_length
     * @param string $_overview
     * @param string $_genre
     * @param string $_poster
     */

    // constructor function
    function __construct($_title, $_originalTitle, $_year, $_length, $_overview, $_genre = [], $_poster)
    {
        $this->title = $_title;
        $this->originalTitle = $_originalTitle;
        $this->year = $_year;
        $this->length = $_length;
        $this->overview = $_overview;
        $this->genre = $_genre;
        $this->poster = $_poster;
    }

    // method that returns the title of the movie
    public function getTitle()
    {
        return $this->title;
    }
}
