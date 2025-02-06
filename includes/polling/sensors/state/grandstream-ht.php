<?php

$stateLookupTable = [
    'On Hook' => 1,
    'Off Hook' => 2,
    'Registered' => 1,
    'Not Registered' => 2,
];

$sensor_value = $stateLookupTable[$sensor_value];
