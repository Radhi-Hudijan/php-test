<?php

// for ($x = 0; $x <= 10; $x++) {
//     echo "number is $x <br>";
// }

// $x = 1;

// while ($x <= 10) {
//     echo " the number is $x <br>";
//     $x++;
// }

$posts = ['first Post', 'Second Post', 'Third post'];

// foreach ($posts as $post) {
//     echo "$post <br>";
// }

// To get index
foreach ($posts as $index => $post) {
    echo "$index : $post <br>";
}
