<?php

$db = new PDO('mysql:host=db; dbname=AnimeCreatures', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare('SELECT `name`, `movie`, `year`, `special_abilities`, `creepiness`, `img_dir` FROM `creatures`;');
$query->execute();
$collection = $query->fetchAll();



echo "<table>";

foreach ($collection as $creature) {
    echo  "<tr><td>" . "Name: " . $creature['name'] . "</td>" . "<td>" . "Movie: " . $creature['movie'] . "</td>"
        . "<td>" . "Year: " . $creature['year'] . "</td>" . "<td>" . "Special Ability: " . $creature['special_abilities'] . "</td>"
        . "<td>" . "How scary: " . $creature['creepiness'] . "</td>" . "<td>" . $creature['img_dir'] . "</td></tr>";
}

echo "</table>";