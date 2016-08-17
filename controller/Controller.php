<?php

include_once "../model/Model.php";

class Controller
{
    public $model;

    public function __construct()
    {
        $this->model = new Model();
    }

    public function invoke()
    {
        if (isset($_GET['name'])) {
            $character = $this->model->getCharacter($_GET['name']);
            include '../view/details.php';
        } else {
            $characters = $this->model->getAllCharacters();
            include '../view/cast.php';
        }
    }
}
