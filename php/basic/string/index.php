<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*$search = "SONKAR";
$replace = "KUMAR";
$subject  = "AMIT KUMAR SONKAR";

echo str_replace($search, $replace, $subject);*/


/*$str = "hellow freind";

echo strlen($str);


$arr2 = str_split($str, 5);


print "<pre>";
print_r($arr2);*/


/*
$findme    = 'a';
$mystring1 = 'xyz';
$mystring2 = 'BCA';

$pos1 = stripos($mystring2, $findme);

echo "=====".$pos1;*/

/*$subject  = "AMIT KUMAR SONKAR";
$count = stripos($subject, 'A');

echo "======".$count;

if($count>=0){
	echo "YES FOUND No of Occurance - ".$count;
}else{
	echo "Sorry, Not Found - OK";
}*/

/*$binary = "1000";
$hex = dechex(bindec($binary));
echo $hex;*/
/*
$hexa = 'FFA500';
//echo hexdec($hexa);

$r = hexdec('FF');
$g = hexdec('A5'); //- Hex to Dec = 10*16+5=165
$b = hexdec('00');

echo $r;
echo "<br>";
echo $g;
echo "<br>";
echo $b;
echo "<br>";*/
/*$input = "Rohan";
echo str_pad($input, 10);                      // produces "Alien     "
echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
echo str_pad($input,  6, "___");               // produces "Alien_"
echo str_pad($input,  3, "*");*/
/*echo str_repeat("Rohan", 15);*/
/*echo str_rot13('PHP 4.3.0'); // CUC 4.3.0*/
/*$str = 'rohan';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;*/
/*$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 5);
echo"<pre>";
print_r($arr1);
print_r($arr2);*/
/*$str = " hellow friend my name is name
      i am happy ";

print_r(str_word_count($str, 1));

echo str_word_count($str);*/




/*echo dechex(255); 
dec to HEx =  255/16 = 15 Quotient,  Remainder 15 - FF


echo "<br>";
echo hexdec('A5');*/


//echo $value = hexdec('ff');-- FF = 15*16+15=255
/*$a = strcspn('abcd',  'apple');
$b = strcspn('abcd',  'banana');
$c = strcspn('hello', 'l');
$d = strcspn('hello', 'world');
$e = strcspn('abcdhelloabcd', 'abcd', -9);
$f = strcspn('abcdhelloabcd', 'abcd', -9, -5);

var_dump($a);
echo"<br>";
var_dump($b);
echo"<br>";
var_dump($c);
echo"<br>";
var_dump($d);
echo"<br>";
var_dump($e);
echo"<br>";
var_dump($f);*/
/*$str = 'rohan kumar sonkar';
echo strlen($str);*/
/*$str1 = "red";
$str2 = "redent";
$test=strncasecmp($str1, $str2 , 3);
if ($str1==$str2)
{
echo "$test";
}
else
{
echo "$test" ;*/
/*$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi');

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');
}*/
/*echo strrev("ROHAN KUMAR SONKAR");*/
// subject does not start with any characters from mask
/*var_dump(strspn("rohan", "o"));

// examine two characters from subject starting at offset 1
var_dump(strspn("rohan", "o", 1, 3));

// examine one character from subject starting at offset 1
var_dump(strspn("rohan", "o", 3, 1));*/

/*$email  = 'name@example.com';
$domain = strstr($email, '@');
echo $domain; // prints @example.com

$user = strstr($email, '@', true);
echo $user; // prints name*/

/*$str = "This Is a Good Boy";
 $str =strtoupper($str);
echo $str;*/
$trans = array("h" => "-", "hello" => "hi", "hi" => "hello");
echo strtr("hi all, I said hello", $trans);
/*$haystack = 'ROHAN KUMAR SONKAR';
$needle   = 'H';

$pos      = strripos($haystack, $needle);

if ($pos === false) {
    echo "Sorry, we did not find ($needle) in ($haystack)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($needle) in ($haystack) at position ($pos)";
}*/


?>







