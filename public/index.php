<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Revolution\CondoManager;

$manager = new CondoManager();
$manager->addUnit('Appartamento 1');
$manager->addUnit('Appartamento 2');

foreach ($manager->listUnits() as $unit) {
    echo "Unità: $unit\n";
}
