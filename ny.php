<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>PHP basics</h1>

<?php
$nl="<br>";

class baseCodeFunctions{

    public function var_info($var, $var_name,$var_declaration) {
        echo "this is variable \"$var_name\" : "; 
        echo "<b>";
        var_dump($var);
        echo "</b><br>"; 

        codeBlock($var_declaration);
    }

    public function section(){
        $newline = "<br>";
        echo "$newline";
    }

    public function hd2($title){
        echo "<h2 style=\"color: brown; text-decoration: underline;\">$title</h2>";
    }

    public function hd3($title){
        echo "<h3 style=\"color: grey; text-decoration: underline; padding-left: 1.618%\">$title</h3>";
    }

    public function op($title){
        echo "$title";
        section();
    }

    public function greenify($content){
        $return_value = "<span style=\"color: red;background-color: chartreuse;\"> $content </span>";
        return $return_value;
    }

    public function codeBlock( $codeVal){
        echo '<span style="background-color: chartreuse;">';
        print"$codeVal";
        echo '</span>';
        section();
        section();
    }

}

$coder = new baseCodeFunctions();
$coder -> hd2("comments");

op( $coder ->  greenify("//") . "single line comment");
op( $coder ->  greenify("#") . " single line comment");
$coder -> op( $coder -> greenify("/*")."$nl This is$nl multi-line $nl comment$nl" . $coder ->  greenify("*/"));

$coder -> section();
$coder -> hd2("variable data types");

var_info($str = "hello", "nl", '$str = "hello";'); // string
var_info($x = true, "x",'$x = true;'); // bool
var_info($x = 123, "x",'$x = 123;'); // int
var_info($x = 12.4, "x",'$x = 12.4;'); // float

hd3("arrays");
var_info($x = array(1,2,3,4), "x",'$x = array(1,2,3,4);'); // array

hd3("constants");
codeBlock("
define(\"PI\", 3.14); $nl
echo PI;$nl
");

hd3("objects");
codeBlock('
    class car{                                                  <br>
        public $name;                                                  <br>
        public $color;                                                  <br>

        public function print_car(){                                                  <br>
            echo "This is $name , of colour $color";                                                  <br>
        }                                                  <br>
    }                                                  <br>

    $car1 = new car();                                                  <br>
    $car1 -> name = "Honda City";                                                  <br>
    $car1 -> color = "red";                                                  <br>

    $car1 -> print_car();                                                  <br>

');
section();

hd2("Escape characters");
printBOLD("new-line",'\n');
printBOLD("carriage-return",'\r');
printBOLD("tab",'\t');
printBOLD("tab-vertical",'\v');
printBOLD("escape",'\e');
printBOLD("form-feed",'\f');
printBOLD("back-slash",'\ \\');
printBOLD("dollar-sign",'\$');
printBOLD("single-quote",'\ \'');
printBOLD("double-quote",'\"');


hd2("Operators");
hd3("Arithmetic");
printBOLD("addition",'$a + $b');
printBOLD("subtraction",'$a - $b');
printBOLD("multiplication",'$a * $b');
printBOLD("division",'$a / $b');
printBOLD("remainder",'$a % $b');
printBOLD("raised-to",'$a ** $b');

hd3("Assgnment");
printBOLD("equal-to",'$a = $b');
printBOLD("addition",'$a += $b');
printBOLD("substraction",'$a -= $b');
printBOLD("multiplication",'$a *= $b');
printBOLD("division",'$a /= $b');
printBOLD("remainder",'$a %= $b');

hd3("Comparison");
printBOLD("equal-to",'$a == $b');
printBOLD("type-check",'$a === $b');
printBOLD("not-equal",'$a != $b');
printBOLD("not-type-check",'$a !== $b');
printBOLD("greater-than",'$a > $b');
printBOLD("less-than",'$a < $b');
printBOLD("greater-than-equal-to",'$a >= $b');
printBOLD("less-than-equal-to",'$a <= $b');

hd3("Increment-Decrement");
printBOLD("pre-increment",'++$a');
printBOLD("post-increment",'$a++');
printBOLD("pre-decrement",'--$a');
printBOLD("post-decrement",'$a--');

hd3("Logical operators");
printBOLD("And",'$a and $b');
printBOLD("And",'$a && $b');
printBOLD("Or",'$a or $b');
printBOLD("Or",'$a || $b');
printBOLD("Xor",'$a xor $b');
printBOLD("Not",'! $a');

hd3("String operators");
printBOLD("corncat",'$a . $b');
printBOLD("corncat assignment",'$a .= $b');

hd3("array operators");
printBOLD("union",'$a + $b');
printBOLD('equality','$a == $b');
printBOLD('strict-equality(same order & type)','$a === $b');
printBOLD('not-strict-equality','$a !== $b');
printBOLD('inequality','$a != $b');
printBOLD('inequality','$a <> $b');



// functions decelarations

 function var_info($var, $var_name,$var_declaration) {
    echo "this is variable \"$var_name\" : "; 
    echo "<b>";
    var_dump($var);
    echo "</b><br>"; 

    codeBlock($var_declaration);
}

 function section(){
    $newline = "<br>";
    echo "$newline";
}

 function hd2($title){
    echo "<h2 style=\"color: brown; text-decoration: underline;\">$title</h2>";
}

 function hd3($title){
    echo "<h3 style=\"color: coral; text-decoration: underline; padding-left: 1.618%\">$title</h3>";
}

 function op($title){
    echo "$title";
    section();
}

 function greenify($content){
    $return_value = "<span style=\"color: red;background-color: chartreuse;\"> $content </span>";
    return $return_value;
}

 function codeBlock( $codeVal){
    echo '<span style="background-color: chartreuse;">';
    print"$codeVal";
    echo '</span>';
    section();
    section();
}

function printBOLD($normText, $BOLDtext){
    section();
    print "$normText : <b>$BOLDtext</b>";
    section();
}
   
?>
</body>
</html>
