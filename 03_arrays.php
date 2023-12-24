<?php 
$number=[1,44,55,22];
$fruit = array('appel','orange');

// print_r($number)

// var_dump($number);

// echo $fruit[1]

//Associative of arrays
$colors = [
1 => 'red',
4=> 'blue',
6=>'green'
];

// echo $colors[6];

$hex=[
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['green']

$person =[
    'first_name' => 'radhi',
    'last_name'=> 'Hudijan',
    'email' => 'radhi@fds.com'
];

// echo $person['email']
// print_r($person)
// var_dump($person)

$people=[
    [
    'first_name' => 'radhi',
    'last_name'=> 'Hudijan',
    'email' => 'radhi@fds.com'
    ],
    [
    'first_name1' => 'radhi1',
    'last_name1'=> 'Hudijan1',
    'email1' => 'radhi@fds.com'
    ],[
    'first_name2' => 'radhi2',
    'last_name2'=> 'Hudijan2',
    'email2' => 'radhi@fds.com'
]
];

// print_r($people);

// echo $people[0]['first_name']

var_dump(json_encode($people));
?>