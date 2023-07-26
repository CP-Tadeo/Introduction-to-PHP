<!DOCTYPE html>
<html>
<head>
  <title>This is about PHP functions</title>
</head>
<body>
    <?php
    echo "<h1>This is about PHP functions</h1>";
    $strng = "Hello world!";
    echo $strng,"</br>";
    echo strrev($strng),"</br>";
    echo str_repeat($strng, 3), "</br>";
    echo strtoupper($strng);
    echo strlen($strng);
    echo "\n";

    echo "<h1> Defininig own Functions</h1>";
    echo "<pre>
    function greet(){
        print 'Hello';
    }
    </pre>";
    function greet(){
        print 'Hello</br>';
    }
    //case do not matter
    greet();
    greet();
    function greeting(){
        return 'Hi';
    }
    echo "<pre>
    function greeting(){
        return 'Hi';
    }
    </pre>";
    print greeting()." Sir</br>";
    print greeting()." Ma'am<br>";

    echo "with parameters </br>";
    function howdy($lang) {
        if ($lang == 'es') return 'Hola';
        if ($lang == 'fr') return 'Bonjour';
        return 'Do you speak English';
    }
    echo "<pre>
    function howdy(lang) {
        if (lang == 'es') return 'Hola';
        if (lang == 'fr') return 'Bonjour';
        return 'Do you speak English';
    }
    </pre>";
    print howdy('es')." Juan</br>";
    print howdy('fr')." Guissepi</br>";
    print howdy('fl')." Jose</br>";
    echo "</br>if not specified in function call and </br> 
    there is a default value in the function creation, then any additional </br>
    arguments provided in call are optional arguments.</br>
    The code will still run even if there are no options given, as there is</br>
    a default given in the function call, which can be overwritten during function call</br>";

    echo "PHP functions do call by value instead of call by reference by default</br>";
    echo "there is still the option of call by reference</br>";
    echo "<pre>
    function callbyreference((amp)parameter){
        (amp)parameter = does_something;
        //no need for return as CBR
    }</pre>";
    
    function callbyreference(&$val){
        $val = $val * 3;
    }
    $val = 15;
    echo "Val is $val</br>";
    callbyreference($val);
    echo "Now val is $val</br>";

    echo "<h1>Variable scope</h1>";
    echo "Typically, variables declared inside a function does not affect</br>
    similarly named variables declared outside a function</br>
    However, we can call the global value by the use of the global keyword</br>
    inside the function</br>";
    echo "<pre>
    function sample(){
        global val;
        val = 100;
    </pre>";
    echo "use this wisely</br></br>";
    if (function_exists("callbyreference")){
        echo "Exists</br>";
    } else {
        echo "DNE</br>";
    }
    if (function_exists("callbyval")){
        echo "Exists</br>";
    } else {
        echo "DNE</br>";
    }
    //phpinfo(); //prints out internal config of your PHP installation

    echo "<h1>modularity</h1>";

    echo "Including files in php:</br>
    include 'header.php'</br>
    include_once 'header.php'</br>
    require 'header.php'</br> //fatal
    require_once 'header.php'</br></br>
    these can look like functions</br>
    require_once('header.php');</br>
    ";
    

    ?>
</body>