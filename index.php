<?php
require_once 'Bycicle.php';
require_once 'Car.php';

    // Cars instances
    $clio = new Car('grey', 5, 'gazole');
    $jumpy = new Car('blue', 7, 'electric');

    // var_dump($clio);
    // var_dump($jumpy);

    // Moving Car
    echo $clio->forward();
    echo $clio->start();
    echo $clio->brake();

    // Bikes instances
    $vtt = new Bycicle('red', 15);
    $vtc = new Bycicle('yellow', 10);

    // var_dump($vtt);
    // var_dump($vtc);

    // Moving bike
    echo $vtt->forward();
    echo $vtt->brake();


