<?php

function array_random($array, $number = null)
{
    $requested = ($number === null) ? 1 : $number;
    $count = count($array);

    if ($requested > $count) {
        throw new RangeException(
            "You requested {$requested} items, but there are only {$count} items available."
        );
    }

    if ($number === null) {
        return $array[array_rand($array)];
    }

    if ((int)$number === 0) {
        return [];
    }

    $keys = (array)array_rand($array, $number);

    $results = [];
    foreach ($keys as $key) {
        $results[] = $array[$key];
    }

    return $results;
}
