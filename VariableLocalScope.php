<?php

function createName()
{
    $name = "Adelio "; // local scope
}

createName();
echo $name . PHP_EOL;
