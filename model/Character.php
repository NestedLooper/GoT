<?php

class Character
{
    public $name; //character's name on the show
    public $allegiance; //house
    public $description; // bio on character
    public $actor; // actor/actress that plays them
    public $link; // url to their IMDB page
    public $img; // local img of character

    public function __construct($name, $allegiance, $description, $actor, $link, $img)
    {
        $this->name = $name;
        $this->allegiance = $allegiance;
        $this->description = $description;
        $this->actor = $actor;
        $this->link = $link;
        $this->img = $img;
    }
}
