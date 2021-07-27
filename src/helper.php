<?php

function addComponent(string $name) : void
{
    $root = $_SERVER['DOCUMENT_ROOT'];
    $componentDirectory = $root . '/src/components/' . $name;

    if (!is_dir($componentDirectory))
        return;

    echo '<link rel="stylesheet" href="/src/components/' . $name . '/scss/styles.scss">';
    echo '<script src="/src/components/' . $name . '/js/scripts.js"></script>';

    require $componentDirectory . '/index.php';
}
