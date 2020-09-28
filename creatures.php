<?php

$db = new PDO('mysql:host=db; dbname=GhibliCreatures', 'root', 'password');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `name`, `movie`, `year`, `superpower`, `creepiness`, `img_dir` FROM `creatures`;');

$query->execute();

$collection = $query->fetchAll();

var_dump($collection);