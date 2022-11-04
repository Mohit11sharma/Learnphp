<?php

/*function hello(){
    echo "hello mohit sharma :";
}
hello();
hello();
echo "this is an example :";
hello();*/

/*function hello($fname="first", $lname="last"){
    echo "hello $fname $lname . <br>";
}
hello("mohit", "sharma");
hello("bilal", "sharma");*/


/*fun with paramtr;
    function sum($a ,$b){
        echo $a+$b;
    }
    sum(10, 20)

    function funName($name){
        echo "Hello mr. $name . <br>";
    }
    funName ("1199Mohit_Sharma@gmail.com")*/
/*function with return value.  
function sum($maths, $eng, $sc){
    $s = $maths+$eng+$sc;
    return $s;
}
function percentage($st){
    $per = $st/3;
    echo $per . "%";

}
$totol = sum(55, 65, 88);
percentage($totol);*/

//fun with refrnce by agrumnt.
/*function testing(&$string){
    $string .= " and something extra.";
}
$str="this is a string";
testing($str);
echo $str;

function first($num){
    $num += 5;
}
function second(&$num){
    $num += 7;
}
$number=10;
first($number);
echo "original value is : $number<br>";

second($number);
echo "original value is : $number<br>";*/

/*veriabl with function.
$seyhello = function($name){
    echo "hello  : $name ";
};

$seyhello("mohit sharma :");*/

/*recursive function..
function display($num){
    if($num<=5){
        echo "$num <br>";
        display($num + 1);
    }
}
display(1);

function fact($n){
    if($n==0){
        return 1;
    }else{
        return($n*fact($n-1));
    }
}
echo fact(7);*/

/*globl and local vrbl..
 $a=10;
function test(){
    global $a;
    echo "inside a func : $a <br>";
}
test();
echo "outside func : $a";

$a=10;
$b=5;
function test(){
    global $a ,$b;
    $a=$a-$b;
}
test();
echo "$a";*/

?>