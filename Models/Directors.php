<?php

class Director
{
    public $directorName;
    public $directorLastname;
    public $directorNationality;

    function __construct($_directorName, $_directorLastname, $_directorNationality)
    {
        $this->directorName = $_directorName;
        $this->directorLastname = $_directorLastname;
        $this->directorNationality = $_directorNationality;
    }

    public function getDirector()
    {
        return $this->directorName . " " . $this->directorLastname . " <br> " . "<span class='fs-5 fw-bold '>Nationality: </span>" . $this->directorNationality;
    }
}
