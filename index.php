<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'creatures.php';
    $db = new PDO('mysql:host=db; dbname=Anime', 'root', 'password');
    $query = ('SELECT `name`, `movie`, `year`, `special_ability`, `creepiness`, `img_dir` FROM `creatures2`;');
    $collection = fetchItems($db, $query);
    ?>
    <meta charset="UTF-8">
    <title>Studio Ghibli Creatures</title>
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="creatures.css" />
</head>
<body>
    <header>
        <h1>Studio Ghibli Creatures Collection</h1>
        <div class="form">
            <a href="form.php">Add a creature</a>
        </div>
    </header>
<section class="monsters">
    <?php display($collection); ?>
</section>
</body>
</html>

