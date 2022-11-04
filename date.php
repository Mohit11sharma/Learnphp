<?php

//str_date_fun()..

/*echo "today is : " . date("d") . "<br>";
echo "today is : " . date("jS") . "<br>";
echo "month is : " . date("F") . "<br>";
echo "month is : " . date("m") . "<br>";
echo "month is : " . date("n") . "<br>";
echo "month is : " . date("M") . "<br>";
echo "year is : " . date("Y") . "<br>";
echo "year is : " . date("y") . "<br>";

echo "full date is : " . date("jS-n-Y") . "<br>";
echo "full date is : " . date("d-M-Y") . "<br>";
echo "full date is : " . date("d-m-Y") . "<br>";
echo "full date is : " . date("jS-F-y") . "<br>";

echo "week of day : " . date("D") . "<br>";
echo "week of day : " . date("l") . "<br>";
echo "week of day : " . date("N") . "<br>";
echo "week of day : " . date("w") . "<br>";

echo "day is : " . date("z") . "<br>";
echo "week of the year : " . date("W") . "<br>";
echo "days of the month : " . date("t") . "<br>";
echo "is this is leap year: " . date("L") . "<br>";*/

//str_time()...
/*echo "hour is : " . date("h") . "<br>";
echo "hour is : " . date("H") . "<br>";
echo "hour is : " . date("g") . "<br>";
echo "hour is : " . date("G") . "<br>";

echo "hour is : " . date("H") . "<br>";
echo "minutes is : " . date("i") . "<br>";
echo "seconds is : " . date("s") . "<br>";
echo "meridiem is : " . date("a") . "<br>";

echo "time is : " . date("h:i:sa e") . "<br>";
echo "time & date is : " . date("d-m-Y h:i:sa") . "<br>";

date_default_timezone_set("Asia/kolkata");
echo "time is : " . date("d-m-Y h:i:sa e") . "<br>";*/

//str_mktime & gmmktime();

/*echo "time is : " . date("d-m-Y h:i:sa ") . "<br>";

echo date("d-m-Y h:i:sa ", mktime(0,0,0,10, 15, 2003)) . "<br>";

echo date("d-m-Y h:i:sa ", gmmktime(0,0,0,10, 15, 2003)) . "<br>";*/

//date_create & formate()....

/*$date = date_create("11-11-1999 12:21:38", timezone_open("Asia/kolkata"));

echo date_format($date, "d-m-Y H:i:s");*/

//date_checkdate & diff()...

/*$date1 = date_create("1999-11-11");
$date2 = date_create("2022-02-01");

$diff = date_diff($date1, $date2);

echo $diff->days . "days";
echo $diff->format("%r%a %m days");

echo "<pre>";
print_r($diff);
echo "</pre>";*/

//date_add & date_sub & date_modify()..

/*$date = date_create("1999-11-11");
date_add($date, date_interval_create_from_date_string("8118 days")) . "<br>";
date_sub($date, date_interval_create_from_date_string("8118 days"));
date_modify($date, "-8118 days");

echo date_format($date, "d-m-Y");*/

//date_getdate & localtime & gettimeofday()..#array_base..

/*$olddate = mktime(0,0,0,11,11,1999);

$date = getdate($olddate);
echo $date['month'] . "-". $date['year'];

echo "<pre>";
print_r(getdate($olddate));
echo "</pre>";

echo "<pre>";
print_r(gettimeofday());
echo "</pre>";
echo gettimeofday(true);

$olddate = mktime(0,0,0,11,11,1999);

echo "<pre>";
print_r(localtime($olddate,true));
echo "</pre>";*/

//date_parse()..

/*echo "<pre>";
print_r(date_parse("11-11-1999 12:30:25.5"));
echo "</pre>";

$date = date_parse("11-11-1999 12:30:25.5");
echo $date['day'];

echo "<pre>";
print_r(date_parse_from_format("d.n.Y", "11.11.1999"));
echo "</pre>";*/

//Date_Strtotime & Strftime & Gmstrftime ()..

/*echo date("d-m-Y", strtotime("11 novmber 1999")) . "<br>";
echo date("d-m-Y H:m:s", strtotime("+1 week")) . "<br>";

echo strftime("%B %d %Y, %X %Z") . "<br>";
echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,11,11,1999)) . "<br>";
echo strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,11,11,1999)) . "<br>";

echo gmstrftime("%B %d %Y, %X %Z", mktime(21,30,0,11,11,1999)) . "<br>";*/

//date_time_set()..

/*$date = date_create("11-11-1999");
date_time_set($date, 13, 20);
echo date_format($date, "d-m-Y h:i:s") . "<br>";

date_time_set($date, 05, 20, 45);
echo date_format($date, "d-m-Y h:i:s") . "<br>";*/

//date_timeZone_get()..

/*date_default_timezone_set("Asia/Kolkata");
echo date_default_timezone_get() . "<br>";

$tm = timezone_open("Asia/kolkata");
echo timezone_name_get($tm);

echo "<pre>";
print_r(timezone_location_get($tm));
echo "</pre>";

echo "<pre>";
print_r (timezone_identifiers_list(16));
echo "</pre>";*/



?>