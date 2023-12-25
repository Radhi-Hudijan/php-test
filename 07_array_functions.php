<?php

$fruits = ['apple', 'orange', 'pear'];

// get length
// echo count($fruits);

//Search array
var_dump(in_array('apple', $fruits));

//add to array

// $fruits[] = 'grape';

array_push($fruits, 'radhi', 'Ali');
array_unshift($fruits, 'manago');

//To remove
array_pop($fruits);
array_shift($fruits);

// unset($fruits[0]);

print_r($fruits);
