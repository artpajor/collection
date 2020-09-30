<?php

$db = new PDO('mysql:host=db; dbname=AnimeCreatures', 'root', 'password');

//fetches data from db and returns it in an assoc array
function fetchItems($db)
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}

$query = $db->prepare('SELECT `name`, `movie`, `year`, `special_abilities`, `creepiness`, `img_dir` FROM `creatures`;');


//displays each item from db in the front end as a loop
function display($query)
{
    $query->execute();
    $collection = $query->fetchAll();
    foreach ($collection as $creature) {
        echo "<div>"
            . "<p>" . "<img src='images/" . $creature['img_dir'] . "' align='left'>" . "</p>"
            . "<p>" . "Name: " . $creature['name'] . "</p>"
            . "<p>" . "Movie: " . $creature['movie'] . "</p>"
            . "<p>" . "Year: " . $creature['year'] . "</p>"
            . "<p>" . "Special Ability: " . $creature['special_abilities'] . "</p>"
            . "<p>" . "How scary it is: " . $creature['creepiness'] . "</p>"
            . "<p>" . "<a href='https://www.fandom.com/articles/7-most-memorable-hayao-miyazaki-anime-movie-creatures'>Read more!</a>" . "</p>"
            . "</div>";
    }
}
