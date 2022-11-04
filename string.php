<?php

/*$a = "hello<br>";
$s = $a . " mohit sharma " . 9807213034;
$s .= "<br> i'm from lucknow 206010 ";
echo $s;*/

//strng_explode & implode()..
/*$str = "hello world. its a beautifull day";
$str = 'red, green, blue, orange';

echo "<pre>";
print_r($str);
echo "</pre>";

$array = array('hello', 'world!', 'beautifull', 'day.');

//$str = implode(" ", $array);
$str = join("<br>", $array);

echo $str;*/

//string_split & chunk()..
$str = "mohit sharma";
$array = str_split($str, 5);
$newstr = chunk_split($str, 3, '<br>');

echo $newstr;
echo "<pre>";
print_r($array);
echo "</pre>";

//str_lowercase()..
/*$str = "mohit sharma bilal is good boy";

//$newstr = strtolower($str);
//$newstr = strtoupper($str);
//$newstr = lcfirst($str);
//$newstr = ucfirst($str);
$newstr = ucwords($str);

echo $newstr;*/

//str_length & count()..
/*$str = "hello guys. what's up guys.";

//echo strlen($str);
$array =  str_word_count($str, 2); 
echo "<pre>";
print_r($array);
echo "</pre>";
echo substr_count($str, "guys", 10, 15);*/

//str_search & find pos()..
/*$str = "i love php. i love php too!";

echo "strpos :" . strpos($str, 'php') . "<br>";
echo "strrpos :" . strrpos($str, 'php') . "<br>";

echo "stripos :" . stripos($str, 'php', 10) . "<br>";
echo "strripos :" . strripos($str, 'php') . "<br>";*/

//str_substr()..
/*$str = "hello worlds. the world is nice :";

echo substr($str, 0, 10);*/

//str_replace()..
/*$str = "i love php. i love php too!";

$find = ["i", "love"];
$replace = ["I", "like"];
echo str_replace($find, $replace, $str);

echo str_replace("php", "python", $str); #case-sensitive
$newstr = str_ireplace("php. i love", "python and", $str);#case- insensitive
echo substr_replace($str, "python", 5, 10);
echo strtr($str, "i", "I");

$array = ["i"=> "I", "love"=> "like"];
echo strtr($str, $array);

echo $newstr;*/

//str_compare()..

/*echo strcmp("hello worlds!", "hello worlds!");
//echo strncmp("Hello worlds!", "hello worlds!", 6);
//echo strcasecmp("Hello worlds!", "hello worlds!");
//echo strncasecmp("Hello worlds!", "hello worlds!", 6);
//echo strnatcmp("hello worlds!", "hello worlds!");
//echo strnatcasecmp("Hello worlds!", "hello worlds!");
//echo substr_compare("Hello worlds!", " worlds!", -2, 2, true);
echo similar_text("hello worlD", "Hello yahoDbaba", $per);
echo "percentage :" . $per;*/

//str_revrse & shufle()..

/*echo strrev("amrahs tihom");

echo str_shuffle("amrahs tihom");*/

//str_pad & repeat()..

/*$str = "mohit ";
echo str_pad($str, 12, "sharma");

echo str_repeat($str, 3);*/

//str_trim().
/*$str = "mohit sharma";

echo $str . "<br>";
echo trim($str, "m");*/


//str_addslashes & stipslashes()...

/*$str = "hello \I am yahoo \Baba ";
echo $str . "<br>";
echo addslashes($str);

$newstr = addcslashes($str, 'a..f');
echo stripcslashes($str);

//$newstr = addcslashes($str, 'a..f');
//echo stripslashes($newstr);

//$newstr = addcslashes($str, 'ya');
//echo $newstr;*/

//str_htmlentities & htmlspacialentties()....

/*$str = '<a href="https://www.yahoobaba.net">Yahoo Baba Website</a>';
//$str = "A 'quote' is <b>bold</b>";
//echo $str . "<br><br>";

//echo htmlentities($str, ENT_QUOTES);
//echo htmlentities($str, ENT_NOQUOTES);

//echo htmlspecialchars($str, ENT_QUOTES);

$htmlent = htmlentities($str, ENT_NOQUOTES);
echo $htmlent;

echo html_entity_decode($htmlent);

echo htmlspecialchars_decode($htmlent);

echo "<pre>";
print_r(get_html_translation_table(HTML_SPECIALCHARS));
print_r(get_html_translation_table(HTML_ENTITIES));
echo "</pre>";*/

//str_md5 & Sha1()...

/*$str = "hello";
echo "the string :" . $str . "<br><br>";
echo "md5 binery :" . md5($str, TRUE) . "<br><br>";
echo "md5 hex :" . md5($str) . "<br><br>";
echo "sha1 binery :" . sha1($str, TRUE) . "<br><br>";
echo "sha1 hex :" . sha1($str) . "<br><br>";

if (md5($str) == "5d41402abc4b2a76b9719d911017c592"){
    echo "passwrd machted ";
}else{
    echo "does not machted";
}*/

//str_convert & uuencode : uudecode()...

/*$str = "hello mohit";
//echo convert_uuencode($str);

$encodestr = convert_uuencode($str) . "<br>";
echo $encodestr;

$decodestr = convert_uudecode($encodestr);
echo $decodestr;*/

//str_bin2hex & hex2bin()..
/*$str = bin2hex("hello mohit sharma");
echo $str . "<br>";

echo hex2bin($str);*/

/*str_chr &ord()..
$str = chr(65);

$str = ord("b");
echo $str;*/

//str_strip_tags &wordwrap()...

/*$str = "this world is beautiful.";
//echo strip_tags($str, "<i>");
echo wordwrap($str, 4, "<br>", TRUE);*/

//str_math_min & max()..
/*$val = max,min(22,13,25,6,33,41);
echo $val;
$val = max,min(array(2,6,4), array(2,5,1));

echo "<pre>";
print_r($val);
echo "</pre>";*/

//str_maths_fun().... 

/*echo (abs(0.60) . "<br>");
echo (floor(0.60) . "<br>");
echo (ceil(0.60) . "<br>");
echo (round(0.60) . "<br>");*/

//str_math_intdiv_sqrt_pow()..

/*echo intdiv(8, 4) . "<br>";
echo sqrt(8) . "<br>";
echo pow(8, 4) . "<br>";*/

//str_random_num()..
/*echo (rand() . "<br>");
echo (rand(1, 100) . "<br>");
echo (mt_rand(10, 38) . "<br>");
echo (lcg_value() . "<br>");*/


?>