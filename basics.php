<?php
echo "Hi there.\n";
$answer = 6*7;
echo "The answer is $answer, what ";
echo "was the question again? \n";

?>
</br>
</br>
<?php
//syntax
//echo "hello";
$abc = 12;
$total = 0;
$largest = 0;
//echo "hello";
$x = 2;
//$y = x + 5; //x is possibly a non-fatal error
//print $y; //possibly 5
//echo "hello";
//y = $x + 5; //parse error
//print $x;

$x = 5;
$y = array("x" => "Hi");
echo $y["x"];
echo "\n"

// concatenation is "." not +
//backslash is an escape character
//strings can span multiple lines
//in double quoted strings, variable values are expanded
?>
</br>
</br>
<?php
echo "this is a simple string \n";

echo "you can also have embedded newlines in
strings this way as it is 
okay to do
just believe";

//outputs: this will expand:
//a newline
echo "This will expand: \na newline ";
#shell style comments
/*multi
line
comments */
$expand = 12;
echo "Variables do $expand\n";
?>
</br>
</br>
<?php
print "echo vs print\n";

echo "echo is a language construct, can be treated like a function\n";
echo "with one parameter.\n";
echo "without parenthesis, it accepts multiple parameters.\n";

print "print is a fx, only one parameter, but parentheses are optional\n";
print "so it can look ;like a langauge construct\n";

print "print can only have one\n";
?>
</br>
</br>
<?php
$x = "15" + 27; // + is numeric
echo($x); //output is 42
echo("\n");

echo "operators of note\n";
echo "increment/decrement (++ --)\n";
echo "string concatenation(.)\n";
echo "equality (== !=)\n"; //equal in value and type conversion happens
echo "identity (=== !==)\n"; //above but no type conversion
echo "ternary (?:)\n";
echo "side-effect assignment (+= -= .= etc)\n";
echo "IGNORE the rarely used bitwise operators (>> << ^|&)\n";

echo "PHP has more aggresive implicit type conversions\n";
?>
</br>
</br>
<?php
echo "increment / decrement\n";

$x = 12;
$a = $x;
$c = $x;
$y = 15 + $x++;
echo "x is $x and y is $y. \n";
echo " the line before used increment after calling x.\n";
echo " y is still 15 + 12 and not 15 + 13. The change to x is done AFTER.\n";
echo "x is called to the operation, does operation, but increment happens after\n";

?>
</br>
</br>
<?php
$b = 15 + ++$a;
echo " x is $a and y is $b \n";
echo " the line before used increment before calling x.\n";
echo "change to x is done before operation is executed. thereby result is 28 \n";
?>
</br>
</br>
<?php
echo "better to just do x = x + 1 \n";
$x = 12;
$y = 15 + $x;
$x = $x + 1;
echo "x is $x and y is $y \n";
?>
</br>
</br>
<?php
echo "string concatenation (.) converts operands to string if necessary \n";
$b = "Hello ";
$c = 27;
$a = $b . $c;
echo "$a world! \n";
?>
</br>
</br>

<?php
echo "Ternary operator\n";
echo " It is like a one-line 'if-then-else'. It must be carefully used\n";
echo ". Format is like this: result = compare1 comparator compare2 ? Result_if_true: Result_if_false\n";
?>
</br>
<?php
$www = 123;
$msg = $www > 100 ? "Large" : "Small";
echo "First: $msg \n";
$msg = ($www %2 == 0) ? "Even":"Odd";
echo "Second: $msg \n";
$msg = ($www %2) ? "Odd":"Even"; //type conversion is happening. int 1 is bool True, int 0 is bool False
echo "Third: $msg \n";
?>
</br>
</br>
<?php
echo "in php division forces operands to be floating point.\n";
echo "PHP converts silently and aggresively\n";
$d = "100"+36.25 + TRUE;
echo "\n$d\n";
echo "the equation above is: '100'+36.25 + TRUE\n";
echo "this is super fucking insane\n";
?>
</br>
</br>
<?php
echo "'sam'+25 results to only 25 as + is a numeric operator and converts string to 0 \n";
$z = "MyNumber".(11+28+2000);
echo $z;
?>
</br>
</br>
<?php
echo "when casting FALSE it becomes nothing\n";
echo False;


?>

</br>
</br>
<?php
$answer = ((5<6)=="2"-"1") ? "True":"False";
echo $answer;
echo "\n. the equation above is ((5<6)=='2'-'1')"
?>
</br>
</br>
<?php
$strng = "Hi World!";
echo "First:".strpos($strng,"Wo")."\n";
echo "Second:".strpos($strng,"ld")."\n";
echo "Third:".strpos($strng,"zz")."\n";

echo "if strpos(strng, 'Hi')==False) echo 'wrong'\n";
echo "this code would not work as the first part would return 0 because position 0, and False is undetectable, yet converted to 0 because of ==\n ";
echo "0 == 0 => True printing out wrong when we found 'Hi' in the string";
echo "if strpos(strng, 'Hi')!==False) echo 'Right'\n";
echo "code above will show Right as 0 !== False\n";
echo "if strpos(strng, 'aa')===False) echo 'Right'\n";
echo "code abbove will show right as 'aa' is not found, and therefore False"
?>
</br>
</br>
<?php
echo "Control structures.\n";
echo "You know how to do c based control structures.\n";
?>