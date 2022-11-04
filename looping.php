<?php
/*while loop
$a=2;
while ($a<=20){
    echo $a . " hello";
    $a++;
}*/

/*do while loop..
$a=1;
do{
    echo " hello everyone.";
    $a++;

}while ($a<=10)*/

/*for loop
for($a=1; $a<=10; $a++){
    echo " mohit sharma.";
}*/

/*nestedloop
for($a=1; $a<=100; $a=$a+10){
    for($b=$a; $b<$a+10; $b++){
        echo $b . " ";
    }
    echo "<br>";
}*/

for($a=1; $a<=10; $a++){
    if($a==3){
        echo "num :" . $a . "<br>";
        //continue;
        break;
    }
    echo " number :" . $a . "<br>";
}


?>
