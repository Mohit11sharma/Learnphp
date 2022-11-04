<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP tuterial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(209, 87, 87);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>lets learn about php</h1>
        <p?>Your party is here</p>
        <?php
        $age =7;
        if($age>7){
            echo "you can go to party :";

        }else if($age==7){
            echo "the are 7 years old";

        }
        else{
            echo "you can not go to party :";
        }
        echo "<br>";
        //array in php
        $languages = array("python", "php", "notejs", "html");
        echo count($languages);
        echo $languages[3]; 
        
        //loop in php
        $a = 0;
        while($a<=10){
            echo "<br>the value of a is :";
            echo $a;
            $a++;
        }
        //array with loop
        $a = 0;
        while($a< count($languages)){
            echo "<br>the value of a is :";
            echo $languages[$a];
            $a++;

        }
        //do while loop
        $a = 0;
        do {
            echo "<br>the value of a is :";
            echo $a;
            $a++;
        }while($a< 10);

        // For loop
        for ($a=0; $a < 10; $a++) { 
           echo "<br>the value of a is :";
           echo $a;
        } 

        //foreach loop
        foreach ($languages as $value) {
            echo "<br>the value is :";
            echo $value;
        }

        function print5(){
            echo "FIVE";
        }
        print5();

        function print_num($number){
            echo "<br>your num is :";
            echo $number;
        }
        print_num(20);
        print_num(22);




        ?>
    </div>
</body>
</html>