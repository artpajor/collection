<?php

$db = new PDO('mysql:host=db; dbname=AnimeCreatures', 'root', 'password');

function display($db)
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare('SELECT `name`, `movie`, `year`, `special_abilities`, `creepiness` FROM `creatures`;');
    $query->execute();
    $collection = $query->fetchAll();
    foreach ($collection as $creature) {
        echo "Name: " . $creature['name'] .  "Movie: " . $creature['movie'] . "Year: " . $creature['year']
            . "Special Ability: " . $creature['special_abilities'] . "How scary: " . $creature['creepiness'];
    }
}

