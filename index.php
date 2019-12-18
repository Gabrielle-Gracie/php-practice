<?php

// $animals = [
// 	'Cow',
// 	'Chicken',
// 	'Dog',
// 	'Goat',
// 	'Cat'
// ];

// $myself = [
// 	'age' => 27,
// 	'hair' => 'Black',
// 	'profession' => 'software tester',
// 	'siblings' => 2

//  ];

//  $myself['name'] = 'Grace'; 
//  unset($myself['age']);


 // echo $myself['age'];

 // var_dump($myself);
 //   die();
 
 //   die(var_dump($myself));


$task = [
	'title' => 'Going to the market',
	'due' => 'Tomorrow',
	'assigned_to' => 'Grace',
	'completed' => false
];

$task['transport'] = 'Car';
unset($task['due']);

echo $task['title'];



// die();
// var_dump($task);




require 'index.view.php';

