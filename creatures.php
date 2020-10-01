<?php

$db = new PDO('mysql:host=db; dbname=Anime', 'root', 'password');

/**
 * fetches data from db and returns it in an assoc array
 *
 * @param object $db
 * @param string $query
 *
 * @return array
 */
function fetchItems(object $db, string $query) :array
{
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query1 = $db->prepare($query);
    $query1->execute();
    $collection = $query1->fetchAll();
    return $collection;
}

//this variable selects the required info from the table 'creatures' in database
$query = ('SELECT `name`, `movie`, `year`, `special_ability`, `creepiness`, `img_dir` FROM `creatures2`;');

/**
 * displays each item from db in the front end as a loop
 *
 * @param array $collection
 */
function display(array $collection)
{
    foreach ($collection as $creature) {
        echo "<div>"
            . "<p>" . "<img src='images/" . $creature['img_dir'] . "' align='left'>" . "</p>"
            . "<p>" . "Name: " . $creature['name'] . "</p>"
            . "<p>" . "Movie: " . $creature['movie'] . "</p>"
            . "<p>" . "Year: " . $creature['year'] . "</p>"
            . "<p>" . "Special Ability: " . $creature['special_ability'] . "</p>"
            . "<p>" . "How scary it is: " . $creature['creepiness'] . "</p>"
            . "<p>" . "<a href='https://www.fandom.com/articles/7-most-memorable-hayao-miyazaki-anime-movie-creatures'>Read more!</a>" . "</p>"
            . "</div>";
    }
}

//will insert inserted data from form to the db
$addCreatures = ('INSERT INTO `creatures2` (`name`, `movie`, `year`, `special_ability`, `creepiness`) VALUES (:creatureName,
:movie, :yearReleased, :ability, :creepiness);');

/**
 * takes info about new item from the form and prepares it to be sent to the front end
 *
 * @param object $db
 * @param string $addCreatures
 *
 */
function addItems(object $db, string $addCreatures)
{
   if (isset($_POST['name']) && isset($_POST['movie']) && isset($_POST['year']) &&
        isset($_POST['special_ability']) && isset($_POST['creepiness'])) {
        $name = $_POST['name'];
        $movie = $_POST['movie'];
        $year = $_POST['year'];
        $ability = $_POST['special_ability'];
        $creepiness = $_POST['creepiness'];
    }

    $query1 =$db->prepare($addCreatures);
    $query1->execute([
            'creatureName' => $name,
            'movie' => $movie,
            'yearReleased' => $year,
            'ability' => $ability,
            'creepiness' => $creepiness
            ]
        );
}

//sends info to db after hitting the button 'add'
if (isset($_POST['add'])) {
    $addCreatures = ('INSERT INTO `creatures2` (`name`, `movie`, `year`, `special_ability`, `creepiness`) VALUES (:creatureName,
:movie, :yearReleased, :ability, :creepiness);');
    addItems($db, $addCreatures);
}


