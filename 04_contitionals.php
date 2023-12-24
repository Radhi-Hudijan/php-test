<?php
$age = 17;

// if($age >= 18){
//     echo 'You are old' ;
// } else {
//     echo ' you are still too young' ;
// }

$t = date("H");

// if( $t < 12 ){
//     echo 'Good Morning';
// } elseif ($t < 17 ) {
//     echo " Good afternoon";
// } else {
//     echo ' Good evening';
// }

$posts = ['Fiest Post'];

// if(!empty($posts)){
//     echo $posts[0];
// } else {
//     echo "No Post";
// }

// echo !empty($posts) ? $posts[0] : 'No Post'

// $Fiest_Post = !empty($posts) ? $posts[0] : 'No Post' ;

// $first_Post = $posts[0] ?? null;

// echo $first_Post;

$fave_color = 'blue';

switch ($fave_color) {
    case 'red':
        echo 'Your favorite is red';
        break;
    case 'blue':
        echo 'Your color is blue';
        break;
    case 'Yello':
        echo 'Your color is Yellow';
        break;

    default:
        echo " your color is not available";
}
