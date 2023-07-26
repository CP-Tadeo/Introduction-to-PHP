<!DOCTYPE html>
<html>
<head>
  <title>This is about arrays</title>
</head>
<body>
<h1>Arrays in PHP</h1>
</br>
</br>
<?php
echo "Arrays in PHP are inspired by Perl.\n";
echo "</br>they are associative arrays.\n";
$stuff = array("Hi", "There");//starts subzero
echo $stuff[0],$stuff[1],"\n";
echo "stuff = array('Hi', 'There')\n\n";
echo "Next is Key Value pair\n";
?>
</br>
</br>
<?php
echo "Key Value pair\n";
$stuff = array("name" => "Norby", "course"=>"WA4E");
echo $stuff["name"], "\n";
echo "Use => to assign key to value. Can be read as 'maps to'.\n";
echo "<pre>\n";
print_r($stuff);
echo ("\n</pre>\n");
echo "</br>above is using print_r</br>";
echo "<pre>\n";
var_dump($stuff);
echo ("\n</pre>\n");
echo "</br>above is using var_dump</br>";
?>
</br>
</br>
<?php
echo "</br>use print_r to show PHP data, also good for debugging\n</br>";
echo "</br>you can print out FALSE with var_dump</br>";
?>
</br>
</br>
<?php
echo "you can allocate a new item in the array and append a value 
at</br>same time using empty square braces[] </br> 
on the right hand side of an assignemnt statement\n";
$va = array();
$va[] = "Hello";
$va[] = "World";
echo "<pre>\n";
print_r($va);
echo ("\n</pre>\n");
echo "looping through an array</br>\n";
$stuff = array("name" => "Norby", "course"=>"WA4E");
foreach($stuff as $key => $value){
    echo "Key = ", $key, "Val= ", $value, "\n</br>";
}
$triparray = array(
    'Group1' => array(
        'a' => 'James',
        'b' => 'George',
        'c' => 'William'
    ),
    'Group2' => array(
        'a' => 'Philip',
        'b' => 'Edward',
        'c' => 'Charles'
    ),
    'Group3' => array(
        'a' => 'David',
        'b' => 'Henry',
        'c' => 'Richard'
    )
    );
echo $triparray["Group3"]["b"];
echo "</br>The format of getting elements of an array inside an array is </br>";
echo "originalarray['key1']['key2']</br>";
?>
<h1>Array Functions</h1>

<?php
echo "array_key_exists(key, array) - returns true if key is set in array</br>";
echo "or isset(array[key]) - returns true if key is set in array </br>";
echo "count(array) - returns how many elements in an array</br>
is_array(array) returns true of the variable IS an array </br>
sort(array) - sorts the values but loses the key</br>
ksort(array) sorts the array by key</br>
asort(array) sorts array by value, keeping key association</br>
shuffle(array) shuffles the array into random order</br>";

echo "</br>null coalescing operator</br>
result = if_statement ?? result_if_false</br>";
$result = $stuff['name'] ?? 'not found';
echo $result;//returns value of name
$result = $stuff['addr'] ?? 'not found';
echo $result;//returns not found

echo "</br> Exploding arrays</br>";
echo "dividing a string into an array</br>";
echo "format is </br>
<pre>
string = 'This is a sentence'
result = explode(the_character_to_split_on, string)
</pre>";

echo "<h1>HTTP & PHP arrays</h1>";
echo "Contents of the _GET array</br>
<p> Using print_r:</p><pre>";
print_r($_GET);

var_dump($_GET);
echo "</pre>";
?>
</body>
</html>