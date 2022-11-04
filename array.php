<?php

/*$colors=array("red", "yellow", "green", "bilal");
  
echo "<ul>";
for($i=0; $i<=3; $i++){
      echo "<li> $colors[$i]</li>"."<br>";
  }
  echo "</ul>";

$colors[0]= "red";
$colors[1]= "yeelow";
$colors[2]= "green";
$colors[3]= "bilal";

echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2] . "<br>";
echo $colors[3] . "<br>";

echo "<pre>";
print_r($colors);
 echo "</pre>"; */

 /*asociative_array...
 $age=array(
   "bilal" => 22,
   "akash"=>23, 
   "mohit"=>21
  );
  $age=[
    1 => "22",
   2=>23.23, 
   3=>21
  ];
  
  $age ["mohit"]=25;
  
  echo "<pre>";
  var_dump($age);
  echo"</pre>";

  echo "<pre>";
  print_r($age);
  echo"</pre>";

 echo $age["bilal"]."<br>";
 echo $age["akash"]."<br>";
 echo $age["mohit"]."<br>";*/
 
 #foreach_array..
/*$age=[
   "red"=>20, 
  "yellow"=>27, 
   "green"=>11, 
   "bilal"=>99
 ];

 echo "<ul>";
 foreach($age as $key => $value){
   echo "<li>$key = $value  </li>";
 }
 echo "</ul>";*/

/*multidimensional array..
$emp =[
  [1,"mohit","manager",50000],
  [2,"bilal","salesman",35000],
  [3,"akash","computer operetor",20000],
  [4,"amir","driver",15000]
];
echo "<table border= '2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
       <th>Emp id</th>
       <th>Emp name</th>
       <th>designation</th>
       <th>Salary</th>


      </tr>";

foreach($emp as $v1){
  echo "<tr>";
  foreach($v1 as $v2){
    echo "<td> $v2 </td>";
  }
  echo "</tr>";
}
echo "<table>";  

for($row=0; $row<4; $row++){
  echo "<tr>";
  for($col=0; $col<4; $col++){
    echo  $emp[$row][$col];
  
  }

}   
echo "<table>";
echo $emp[0][0] . " ";
echo $emp[0][1] . " ";
echo $emp[0][2] . " ";
echo $emp[0][3] . " ";

echo "<pre>";
print_r ($emp);
echo "</pre>";*/

/*multidimensional_associative_array..
$marks = [
  "Bilal"=>[
    "physics"=> 77,
    "maths"=> 68,
    "chemistry"=> 89
  ],
  "Mohit"=>[
    "maths"=> 59,
    "physics"=> 72,
    "chemistry"=>88
  ],
  "Akash"=>[
    "maths"=> 74,
    "physics"=> 62,
    "chemistry"=> 68
  ]
];
    echo "<table border='1px' cellpadding='5px' cellspanning='2px'>";
      echo "<tr>
       <th>Name.</th>
       <th>physics</th>
       <th>math</th>
       <th>chemistry</th>

      </tr>";
    foreach($marks as $key =>$v1){
      echo "<tr>
        <td>$key</td>";
        foreach($v1 as $v2){
        echo "<td>$v2 </td>";
      }
      echo "</tr>";
    }
  echo "</table>";

echo "<pre>";
print_r($marks);
echo "</pre>";*/

#foreachloop with list_array..
/*$emp =[
  [1,"mohit","manager",50000],
  [2,"bilal","salesman",35000],
  [3,"akash","computer operetor",20000],
  [4,"amir","driver",15000]
];

$emp=[
  [
    "id"=>1,
    "name"=>"mohit",
    "desigention"=>"manger",
    "salary"=>50000
  ],
  [
    "id"=>2,
    "name"=>"Kriti",
    "desigention"=>"salesman",
    "salary"=>5000
  ],
  [
    "id"=>3,
    "name"=>"akash",
    "desigention"=>"computer operetor",
    "salary"=>20000
  ],
  [
    "id"=>4,
    "name"=>"bilal",
    "desigention"=>"driver",
    "salary"=>15000
  ]
];

echo "<table border='1px' cellspanning='4px' cellpadding='6px'>
    <tr>

      <th>Sr. no</th>
      <th>Name emp</th>
      <th>desigemtion</th>
      <th>salary</th>
      </tr>";
 foreach($emp as list("id"=>$id, "name"=>$name, "desigention"=>$desigention, "salary"=>$salary)){
   echo "<tr><td>$id</td> <td>$name</td> <td>$desigention</td> <td>$salary</td></tr>";
 }
 echo "</table>";*/

 #count() & sizeof()_arry..
 
 /*$food=array('orange', 'banana','apple', 'graps', 'apple');
 echo count($food);
 echo sizeof($food);

$food = array(
  'fruits'=> array('orange', 'banana','apple'),
  'veggie'=> array('carrot', 'collard', 'pea')
);

$len=count($food);
for($i=0; $i<$len; $i++){
  echo $food[$i] . "<br>";
}

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";*/

#in_array & srch_array..
/*$food=array('orange', 'banana','apple', 'graps');
$food=array('a'=>'orange', 'b'=>'banana','c'=>'apple', 'd'=>'graps');

$a = array(array('b', 'h'), array('kriti', 'mohit'), 'sh');
if (in_array(array('kriti', 'mohit'), $a, true)){
    echo "find successfully..";
}else{
  echo "can't find..";
}
 echo array_search('banana', $food);*/

#array_replace()&&array_replace_recursive()..
/*$fruits = ['orange', 'banana','s'=>'apple', 'graps'];
$veggie = ['s'=>'carrot', 'collard'];
$name = ['mohit', 'Bilal', 'akash', 'sharma'];

$newarray = array_replace($fruits, $veggie,);
echo "<pre>";
print_r($newarray);
echo "</pre>";

$array1 = array("a"=>array("red"), "b"=>array("green", "pink"));
$array2 = array("a"=>array("yellow"), "b"=>array("black"));

$newarray = array_replace_recursive($array1, $array2);
echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#array_pop()_push()...
/*$fruits = ['orange', 'banana', 'graps'];
array_push($fruits, "apple");
echo "<pre>";
print_r($fruits);
echo "</pre>";*/

#array_shift and array_unshift..
/*$fruits = [ 'banana','apple','graps'];
array_unshift($fruits,'orange','lemon');
echo "<pre>";
print_r($fruits);
echo "</pre>";*/

#array_merge()and array_combine()...
/*$fruits = [ 'banana','apple','graps'];
$veggie = [ 'carrot','pra'];
$color = [ 'black','red'];*/
/*$fruits=array('a'=>'orange', 'b'=>'banana','c'=>'apple', 'd'=>'graps');
$veggie = ['b'=> [$color => ['red', 'blue', 'green']], 'e'=>'pra'];
#$newarray = array_merge($fruits, $veggie);
$newarray = array_merge_recursive($fruits, $veggie);

$name = array('mohit', 'bilal', 'akash');
$age = array(22, 18, 19);
$newarray = array_combine($name, $age); 
echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#array_slice()..
/*$fruits = [ 'banana','apple','graps'];
$newarray = array_slice($fruits, 1, 3);
$newarray = array_slice($fruits, 1, 3, true);
$food=array('a'=>'orange', 'b'=>'banana','c'=>'apple', 'd'=>'graps');
$newarray = array_slice($food, 1, 3);
echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#array_splice()..
/*$color = ['red', 'green','blue', 'black'];
$fruits = ['orange', 'apple'];
array_splice($color, 1, 0, $fruits);
echo "<pre>";
print_r($color);
echo "</pre>";*/

#array_keys()..
/*$color = [
          "first"=>"red",
          "second"=>"blue",
          "third"=>"green",
          "fourth"=>"yellow"
];
$newarray = key("third",$color);
$newarray = key_first("third",$color);
$newarray = key_last("third",$color);
$newarray = key_exists("third",$color);
if($newarray){
  echo "key exist";
}else{
  echo "key does not exist";
}

   
echo "<pre>";
    print_r($newarray);
    echo "</pre>";*/

#array_intersect().. 
/*function compare($a1, $b){
  if ($a1 === $b){
    return 0;
  }
  return ($a1 > $b)? 1 : -1;
} 
function compareValue($a1, $b){
  if ($a1 === $b){
    return 0;
  }
  return ($a1 > $b)? 1 : -1;
} 

$a1=array('a'=>'black :', 'b'=>'blue', 'c'=>'green','d'=>'yellow');
$a2=array('a'=>'black :', 'f'=>'green', 'd'=>'purple');

#$newarray = array_intersect($a1, $a2);
#$newarray = array_intersect_key($a1, $a2);
#$newarray = array_intersect_assoc($a1, $a2);
#$newarray = array_intersect_uassoc($a1, $a2, "compare");
#$newarray = array_uintersect_assoc($a1, $a2, "compare");
#$newarray = array_intersect_ukey($a1, $a2, "compare");
#$newarray = array_uintersect($a1, $a2, "compare");
$newarray = array_uintersect_uassoc($a1, $a2, "compare", "compareValue");
echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#array_difffunction()..

/*function compare($a1, $b){
  if ($a1 === $b){
    return 0;
  }
  return ($a1 > $b)? 1 : -1;
} 

$a1=array('a'=>'black :', 'b'=>'blue', 'c'=>'green','d'=>'yellow');
$a2=array('a'=>'black :', 'f'=>'green', 'd'=>'purple');

$newarray = array_diff_uassoc($a1, $a2, "compare");

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#arrayvalue && arrayunique()..
/*$a1=array('a'=>'red :', 'b'=>'blue', 'a'=>'red','d'=>'yellow');

$newarray = array_unique($a1);
$newarray = array_values($a1);

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#arraycolumn & arraychunk()..
/*$array = array(array(
                 'id'=>'1999',
                 'first_name'=>'mohit',
                 'last_name'=>'sharma',
),
                array(
                  'id'=>'2001',
                 'first_name'=>'kriti',
                 'last_name'=>'singh',
                ),
                array(
                  'id'=>'2000',
                 'first_name'=>'appu',
                 'last_name'=>'kimar',
                )
                 );
$newarray = array_column($array, 'first_name', 'id');
$cars = array(
  'vovlo'=>'5000000',
  'BMW'=>'4000000',
  'audi'=>'6000000',
  'opel'=>'4500000', 
  'merceds'=>'6500000', 
  'martin'=>'8000000'
);

$newarray = array_chunk($cars, 3, true);

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#array_flip && change_key_case()....
/*$cars = array(
  'vovlo'=>'5000000',
  'BMW'=>'4000000',
  'audi'=>'6000000',
  'opel'=>'4500000', 
  'merceds'=>'6500000', 
  'martin'=>'8000000'
);

#$newarray = array_flip($cars);
$newarray = array_change_key_case($cars, CASE_UPPER);

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

#array_sum & product()...
/*$a=array(2, 5, 8, 5, 9,4);

echo "product = " . array_product($a);
echo " sum = " . array_sum($a);*/

#array_rand & shuffle()..
/*$color = array('red', 'green', 'blue', 'yellow', 'brown');

shuffle($color);

echo "<pre>";
print_r($color);
echo "</pre>";

echo $color[$newarray[0]] . "<br>";
echo $color[$newarray[ 1]];*/

//array_fill && array_fil_keys...
/*$newarray = array_fill(0, 6, "Bilal");

$get_array= array("b", "m", "k", "a");
$newarray = array_fill_keys($get_array, "bilal");

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

//array_walk & array_walk_recursive()..
/*$vaggies = array('1'=>'carrot', '2'=>'tomatoes');
$fruits = array(
              $vaggies,
              'a'=>'Apple',
              'b'=>'Bilal',
              'c'=>'cat',
              'd'=>'dog'
               );
//array_walk($fruits, "myfunction", "for");
array_walk_recursive($fruits, "myfunction", "for");
function myfunction($value, $key, $param){
  echo "$key $param $value <br>";
}*/

//array_map()...
/*function sequar($n){
  //return "$n for $m";
  //return [$n => $m];
  return strtoupper($n);
}
$a = array(2, 6, 7, 8, 3);
$fruits= array('a'=>'lemon', 'b'=>'apple', 'c'=>'banana', 'd'=>'organge', 'e'=>'graps');

//$newarray = array_map('sequar', $a, $fruits);
$newarray = array_map('sequar', $fruits);

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

//array_ruduce()...
/*function myfunction($n, $m){
  return $n + $m;
}
//$a = ['orange', 'banana', 'apple'];
$a = [1, 2, 3, 4, 5];

$newarray = array_reduce($a, 'myfunction', 1);

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

//array_sorting()..
/*$food = array(
  'd'=>'banana',
  'a'=>'orange',
  'b'=>'Apple',
  'c'=>'grapes'
   );
$array1 = array('Img10.png', 'img12.png', 'Img2.png', 'img1.png');

$food = array('oreange', 'banana', 'banana', 'apple');
//$veggie = array('lemon', 'carrot');
//sort($food);  //asending order..
//rsort($food); //dsnding order..
//asort($food); 
//arsort($food);
//ksort($food);
//krsort($food);
//natsort($array1);
//natcasesort($array1);
//array_multisort($food, $veggie); //same_value.
$newarray = array_reverse($food);

echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<pre>";
print_r($veggie);
echo "</pre>";*/

//array_traversing()...
/*$food = array('banana', 'orange', 'apple', 'grapes');

echo "<b>current : </b>" . current($food) . "<br>";
echo "<b>key : </b>" . key($food) . "<br>";

next($food);
echo "<b>current : </b>" . current($food) . "<br>";

next($food);
echo "<b>current : </b>" . current($food) . "<br>";

prev($food);
echo "<b>current : </b>" . current($food) . "<br>";

end($food);
echo "<b>current : </b>" . current($food) . "<br>";
echo "<b>key : </b>" . key($food) . "<br>";

reset($food);
echo "<b>current : </b>" . current($food) . "<br>";

echo "<pre>";
print_r(each($food));
echo "</pre>";
echo "<b>current : </b>" . current($food) . "<br>";
echo "<b>key : </b>" . key($food) . "<br>";*/

//array_list()..
/*$color = array('red', 'green', 'blue');
$color = array('0'=>'red', '1'=>'green', '2'=>'blue');
list($a[0], , $a[1],) = $color;

echo "value of  a : $a[0] <br>";
echo "value of  b : $a[1] <br>";
echo "value of  c : $a[2] <br>";*/

//array_extrc && compct..
/*$a = 'orange';
$color = array('a'=>'red', 'b'=>'green', 'c'=>'blue');

//extract($color);
//extract($color, EXTR_OVERWRITE);
//extract($color, EXTR_SKIP);
//extract($color, EXTR_PREFIX_SAME, "texts");
extract($color, EXTR_PREFIX_ALL, "texts");

echo "value of  a : $a <br>";
echo "value of  a : $texts_a <br>";
echo "value of  b : $texts_b <br>";
echo "value of  c : $texts_c <br>"

$firstname = 'mohit';
$lastname = 'sharma'; 
$age = '22';
$gender = 'male';
$country = 'india';

$extra = ["gender", "country"];
$newarray = compact('firstname', 'lastname', 'age', $extra);

echo "<pre>";
print_r($newarray);
echo "</pre>";*/

//array_range()...
/*$newarray = range(0, 100, 10);

echo "<pre>";
print_r($newarray);
echo "</pre>";

foreach(range('A', 'Z') as $letter){
     echo $letter . "<br>";
}*/

?>