<?php

// Premiere ligne
session_start();
$_SESSION['couleur'] = 'rouge';


require __DIR__ . '/index.html';

if (isset($_POST['submit'])) {
    $_SESSION['couleur'] = $_POST['color'];
}

echo $_SESSION['couleur'];