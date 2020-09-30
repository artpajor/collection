<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add a creature</title>
</head>
<body>
<h1>You can add your favourite creature to this collection:</h1>
<form method="post" action="index.php" id="add_form" enctype="multipart/form-data">
    <label for="name">Add your creature's name:</label><br>
    <input id="name" name="name" type="text" value="" size="30" /><br>
    <label for="movie">Which movie is it in:</label><br>
    <input id="movie" name="movie" type="text" value="" size="30" /><br>
    <label for="year">Which movie is it in:</label><br>
    <input id="year" name="year" type="text" value="" size="30" /><br>
    <label for="ability">What's special about it:</label>
    <input id="ability" name="ability" type="text" value="" size="30" /><br>
    <label for="creepiness">How intimidating do you find it from 0 to 10?</label>
    <input id="creepiness" name="creepiness" type="number" size="30" />




</form>

</body>
</html>