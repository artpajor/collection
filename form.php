<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'creatures.php'; ?>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="form.css" />
    <title>Add a creature</title>
</head>
<body>
<h1>You can add your favourite creature to this collection:</h1>
<form method="post" action="" id="add_form" enctype="multipart/form-data">
    <div>
        <label for="name">Add your creature's name:</label><br>
        <input id="name" name="name" type="text" value="" size="30" /><br>
    </div>
    <div>
        <label for="movie">Which movie is it in:</label><br>
        <input id="movie" name="movie" type="text" value="" size="30" /><br>
    </div>
    <div>
        <label for="ability">What's special about it:</label><br>
        <input id="ability" name="ability" type="text" value="" size="30" /><br>
    </div>
    <div>
        <label for="creepiness">How intimidating do you find it from 0 to 10?</label><br>
        <input id="creepiness" name="creepiness" type="number" size="30" /><br>
    </div>
    <div>
        <input type="submit" value="Add" />
    </div>

</form>
</body>
</html>