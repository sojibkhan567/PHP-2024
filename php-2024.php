<?php

$x = 120;

$y = 3;

$sum = $x + $y;

$_sub = $x - $y;

$mul = $x * $y;

$exp = $x ** $y;

$division = $x / $y;

$modolus = $x % $y;

$x = $x++;

$y = --$y;

//echo  "Summation:".$sum." "."Subtraction:".$_sub." "."Multiplication:".$mul." "."Exponent:".$exp." "."Division: ".$division." "."Modolus: ".$modolus." ";

/**
 * Continue and Break statement
*/
for ($i=1; $i <= 10; $i++) { 
    if($i==5) {
        //continue;
        break;
    }

    echo $i;
} 

/**
 * Conditinal ternery operator
 */
$x = 20;
$y = 10;

($x < $y) ? $z = "x is grater" : $z = "y is grater";

echo $z;

/**
 * Switch Statement
*/
$day = 2;

switch ($day) {
    case 1:
        echo "Starday";
        break;
    
    case 2:
        echo "Sunday";
        break;
    
    case 3:
        echo "Monday";
        break;
    
    case 4:
        echo "Tuesday";
        break;
    
    case 5:
        echo "Wednesday";
        break;
    
    case 6:
        echo "Thrusday";
        break;
    
    case 7:
        echo "Friday";
        break;
    
    default:
        echo "Invalid day";
        break;
} 

/**
 * While Loop
 */
$a = 1;

while ($a <= 10) {
    echo $a."<br>";
    $a++;
}

/**
 * Array
 */
$map = [
    'foo' => "football",
    'bar' => null,
    'foobar' => ' ',
];

$result = array_key_exists('foo', $map);
$res = isset($map['foo']);
//echo $result;
echo $res;

/**
 * ARRAY ITERATION
 */
$people = ['Tim', 'Tony', 'Turanga'];
$foods = ['chicken', 'beef', 'slurm'];

$res = array_map(function($person, $food){
    return "$person likes $food.\n";
}, $people, $foods);

print_r($res);

assert(count($people) === count($foods));
for ($i = 0; $i < count($people); $i++) {
    echo "$people[$i] likes $foods[$i]\n";
}

foreach ($people as $index => $person) {
    //echo $index."\n";
    $food = $foods[$index];
    echo "$index => $person likes $food\n";
}

/**
 * Executing Upon an Array
 */
//operation each element of array
    $array = [1, 2, 3, 4, 5];

    $newArray = array_map( function ($item) {
        return $item + 1;
    }, $array);
    print_r($newArray);

//Array_walk()
    array_walk($array, function($value, $key) {
        echo $key." => ".$value."\n";
    });

//Array_walk_recursive()
    $array = [1, [2,3,[4,5],6],7];
    array_walk_recursive($array, function($value, $key){
        echo $key." => ".$value."\n";
    });

//array_chunk()
        $array = ['a', 'b', 'c', 'd', 'e', 'f'];
        $output_array = array_chunk($array, 2);
        print_r($output_array);

//Convert array to string
        $arr = ['a' => "AA", 'b' => "BB", 'c' => "CC"];
        echo "array value: ".implode(" ", $arr)."\n";
        echo "array key: ". implode(" ", array_keys($arr));

        $string = implode(" ", array_map(function($key,$val){
            return "$key:$val";
        }, array_keys($arr), $arr));

        echo $string;

//Array_reduce()
        $arr = [10, 23, 211, 34, 25, 512];
        $result = array_reduce($arr, function($carry, $item){
            //return $carry + $item;
            return $item > $carry ? $item : $carry;
        });
        echo $result;

//Array filtering
        $my_array = [1,0,2,null,3,'',4,[],5,6,7,8];
        print_r(array_filter($my_array));

//Find even number form an array
        $my_array = [1,2,3,4,5,6,7,8];
        $even_numbers = array_filter($my_array, function($number){
            return $number % 2 === 0;
        });
        print_r($even_numbers);

//Find even index number form an array
    $my_array = [1,24,300,454,554,66,76,8];
    $even_numbers = array_filter($my_array, function ($index) {
        if ($index === 0) {
            // 0 is not even or odd.
        } else {
            return $index % 2 === 0;
        }
    }, ARRAY_FILTER_USE_KEY);
    print_r($even_numbers);

//$_COOKIE in php
    $cookie_name = 'user';
    $cookie_value = 'sojib khan';

    setcookie($cookie_name, $cookie_value, time() + (86400), "/");

    if(isset($_COOKIE[$cookie_name])){
        echo "User is ".$_COOKIE['user'];
    } else {
        echo "User is not logged in.";
    };


//$_SESSION in php
    session_start();
    $_SESSION['user'] = "Sojib Khan";
    echo $_SESSION['user'];