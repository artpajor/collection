<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Studio Ghibli Creatures</title>
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="creatures.css" />
</head>
<body>
<?php require 'creatures.php'; ?>
<header><h1>Studio Ghibli Creatures Collection</h1>
    <form action="" method="post">
        <label for="addCreature">Add creature</label>

    </form>
</header>

<section class="monsters">
    <?php display($db); ?>

</section>
</body>
</html>