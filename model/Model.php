<?php

include_once "Character.php";

class Model
{
    public function getAllCharacters()
    {
        return array(
            "Daenerys Targaryen" => new Character("Daenerys Targaryen", "House Targaryen", "Princess of House Targaryen, Daenerys lives in exile in Essos with her advisors and dragons. Dany rallied the Unsullied of Astapor to her cause and continues to grow the army she needs to take back the throne.", "Emilia Clark", "http://www.imdb.com/name/nm3592338/", "dany.jpg"),
            "Jon Snow" => new Character("Jon Snow", "House Stark", "Ned Stark's bastard son, Jon joined the Night's Watch. On a mission for Lord Commander Mormont, Jon infiltrated the wildlings by pretending to forsake his Night Watch brothers. In doing so, he fell in love with Ygritte, a wildling woman.", "Kit Harington", "http://www.imdb.com/name/nm3229685/", "jon.jpg"),
            "Gregor Clegane" => new Character("Gregor Clegane", "House Lannister", "Gregor is the head of House Clegane - minor vassals of House Lannister, the older brother of Sandor Clegane, and a notoriously fearsome warrior, with a tendency toward extreme and at times excessive violence. Due to his freakishly huge size, he is called The Mountain That Rides or more often simply The Mountain", "Thor Bjornsson", "http://www.imdb.com/name/nm5491087/", "mountain.jpg"),
            "Cersei Lannister" => new Character("Cersei Lannister", "House Lannister", "Queen Regent of the Seven Kingdoms, Cersei is fiercely protective of her three children. Even before she was married to Robert Baratheon, she was involved in a relationship with her twin brother, Jaime.", "Lena Headey", "http://www.imdb.com/name/nm0372176/", "cersei.jpg"),
            "Tyrion Lannister" => new Character("Tyrion Lannister", "House Lannister", "What Tyrion lacks in size and strength, he makes up for in mental acuity. Former Hand of the King in his father's absence, he now serves as Master of Coin on the Small Council.", "Peter Dinklage", "http://www.imdb.com/name/nm0227759/", "dadinkles.jpg"),
            "Arya Stark" => new Character("Arya Stark", "House Stark", "The younger of the Stark daughters, Arya has put her survival skills to use as she continues to evade the Lannister forces that seek her. En route to the Twins in search of her mother and brother, she arrived at the castle after the Red Wedding.", "Maisie Williams", "http://www.imdb.com/name/nm3586035/", "arya.jpg"),
            "Petyr Baelish" => new Character("Petyr Baelish", "House Baelish", "Nakedly ambitious, Littlefinger left the Small Council to marry Lysa Arryn and secure the Vale to the Lannister's side. Beyond his official duties, he is the eyes and ears of King's Landing along with Varys.", "Aidan Gillen", "http://www.imdb.com/name/nm0318821/", "peter.jpg"),
            "Bran Stark" => new Character("Bran Stark", "House Stark", "Crippled after Jaime Lannister pushed him from a tower, Bran travels with his bannermen Jojen and Meera Reed to fulfill the visions that he and Jojen share.", "Isaac Hempstead Wright", "http://www.imdb.com/name/nm3652842/", "bran.jpg"),
            "Sansa Stark" => new Character("Sansa Stark", "House Stark", "The oldest Stark daughter, Sansa has since realized that King's Landing isn't the fairy tale she assumed it would be.", "Sophie Turner", "http://www.imdb.com/name/nm3849842/", "sansa.jpg"),
        );
    }

    public function getCharacter($name)
    {
        $characters = $this->getAllCharacters();
        return $characters[$name];
    }

}
