<?php

$db = new PDO('mysql:host=db; dbname=AnimeCreatures', 'root', 'password');

function display($db)
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare('SELECT `name`, `movie`, `year`, `special_abilities`, `creepiness`, `img_dir` FROM `creatures`;');
    $query->execute();
    $collection = $query->fetchAll();
    foreach ($collection as $creature) {
        echo "<div>"
            . "<img src='images/" . $creature['img_dir'] . "'>"
            . "<br />"
            . "Name: " . $creature['name']
            . "<br />"
            . "<br />"
            .  "Movie: " . $creature['movie']
            . "<br />"
            . "<br />"
            . "Year: " . $creature['year']
            . "<br />"
            . "<br />"
            . "Special Ability: " . $creature['special_abilities']
            . "<br />"
            . "<br />"
            . "How scary it is: " . $creature['creepiness']
            . "<br />"
            . "</div>";
    }
}
