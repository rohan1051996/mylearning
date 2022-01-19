<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$name = "AMIT KUMAR SONKAR";
//echo strlen($name);
$list = explode(" ",$name);

//print "<pre>";
print_r($list);

$name = "First Name - $list[0] and LAST NAME - $list[2] and MIDDLE NAME - $list[1]";
//echo $name;


$arr = array('SURENDRA','KUMAR','SONKAR');
print "<pre>";
print_r($arr);

$newname = implode(" ",$arr);
echo $newname;

$name2 = "AMIT KUMAR SONKAR";

if(md5($name2)=="b1693b3cdbe6fd25b1679d0fb7b695ca"){
	echo "YESSSSSSSSSSSS";
}else{
	echo "NOOOOOOOOO";
}

$new = str_replace("AMIT","CHINTU",$name2);

$bin='111100001';
echo bin2hex($bin);


//echo $new;
//echo "<br>";
$input = "SURENDRA";
echo $input;
//echo "<br>";
//echo str_pad($input, 10);                      // produces "Alien     "
//echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
//echo str_pad($input, 10, " ", STR_PAD_BOTH);

$string = "<p>SURENDRA</p>";
echo htmlentities($string);
//echo strip_tags($string);
$str = "<p>this &gt; &quot;</p>\n";

echo htmlspecialchars_decode($str);
$str = "we ar\e es\cap\ing \r\n";

echo stripslashes($str);

$text = 'my name surendra kumar sonkar';
echo strlen($text);

//echo "<br>";

//echo substr_count($text, 'e'); 


//echo strtoupper($text);

//echo strtolower($text);

//echo ucfirst($text);
//echo ucwords($text);

//echo trim($text,"r")
//echo addcslashes('ROHAN','A..z');
//$str = "My Name is Ali'Rohan Sonkar";

// Outputs: Is your name O\'Reilly?
//echo addslashes($str);
//$binary='11111001';
//echo bin2hex(bindec($binary));
//echo chop("   Ramki   ");
/*$binary = "11111001";
$hex = dechex(bindec($binary));
echo $hex;
$str='ROHAN KUMAR SONKAR.';
echo count_chars($str,1);*/
/*$data = "Two Ts and one F.";

foreach (count_chars($data, 1) as $i => $val) {
   echo "There were $val instance(s) of \"" , chr($i) , "\" in the string.\n";
   }*/
//echo "ROHAN KUMAR SONKAR.";
//echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters';
/*$str="Returns an array of strings ";
$list=explode(" ",$str);
print"<br>";
print_r($list);*/
/*if (!($fp = fopen('sunday', 'w'))) {
    return;
}

fprintf($fp, "%04d-%02d-%02d", $year, $month, $day);*/
//var_dump(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES | ENT_HTML5));
//$str = " You \"might\" wonder <p></p> why trim";

//$a = htmlentities($str);

//$b = html_entity_decode($a);

//echo $a; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

//echo $b; 
//$str="My 'name' is <p>ROHAN</p> SONKAR";
//echo htmlentities($str);
$string = "<p>ROHAN</P>";
echo htmlentities($string);
//$str="ROHAN KUMAR SONKAR";
//echo lcfirst($str);
/*$str1= "ROHAN SONKAR";
$str2= "AMIT SONKAR";
 $insertion_cost = '1';
 $replacement_cost = '1';
 $deletion_cost = '1';
echo levenshtein(str1, str2,1,1,1);*/
/*$str="SONKAR";
if(md5($str) ==='295a4f179f895df7fdb07934b62fd576f1') {
	echo "yessssss";
}
else{
	echo"nooooooooo";
}*/
$str1="ASSISTENCE";
$str2="ASSISTANT";
echo metaphone($str);
echo"<br>";
echo metaphone($str);
echo nl2br("rohan is a \n good boy");

$number= '24003.42';
echo number_format($number,2,".",",");

$str = "\n";
if (ord($str) == 10) {
    echo "The first character of \$str is a line feed.\n";
   }
   $character="ROHAN SONKAR";
   echo ord($character);

   $str="first=ROHAN&arr[]=SONKAR+AMIT&arr[]=SONKAR";
   parse_str($str,$output);
   echo $output['first'];
   echo $output['arr'][0];
   echo $output['arr'][1];

   $expression="SONKAR";
   print"ROHAN KUMAR $expression";

   $n= 234375787539;
   $u= -234375787539;
   $c= 55;
   printf($n);
   print"<br>";

   $str="ROHAN_KUMAR_SONKAR";
   echo quoted_printable_encode($str);
   echo"<br>";

   $str="ROHAN.KUMAR. SONKAR?";
   echo quotemeta($str);

   $str="AMITKUMAR";
   echo rtrim($str,"\n\r\t\v\x00");
   echo"<br>";

   $str="WEDNESDAY";
   if(sha1($str)=='a86e95a3de6c6d679d6527aad5d93c5216555e6f'){
   	echo"yes";
   }
   else{
   	echo"nooo";
   }
   $str1='ROHAN KUMAR SONKAR';
   $str2='AMIT KUMAR SONKAR';
   echo similar_text($str1, $str2,$percent);
   echo"<br>";
   $str="EULER";
   echo soundex($str);
   echo"<br>";

   $num=6;
   $location='market';
   $format='There are %d member going to %s';
   echo sprintf($format,$num,$location);
   echo"<br>";
   $str='23';
   echo chr($str);

   $str="ROHAN";
   echo chunk_split($str,3," \n");

   $str="ROHAN sS";
   echo crc32($str);

   $password="Rohan@123";
   echo crypt($password, password_hash);
   $str="f4";
   echo hex2bin($str);
   echo"<br>";
   $str = "A 'quote' is <b>bold</b>";
echo htmlentities($str);
$arr=['AMIT','KUMAR','SONKAR'];
echo implode($arr);
echo"<br>";
$str="Hellow rohan";
//echo ltrim($str,"\n");
echo metaphone($str,1);
echo"<br>";

$str= "first=Rohan&arr[]=AJIT+KUMAR&arr[]=SONKAR";
 parse_str($str,$output);
 echo $output['first'];
 echo $output['arr'][0];
 echo $output['arr'][1];
echo"<br>";
 $search="AMIT";
 $replace="ROHAN";
 $subject="AMIT SONKAR";
 echo str_ireplace($search, $replace, $subject,);
echo"<br>";
 $str="ROHAN";
 //echo str_pad($str, 10);
 echo str_pad($str, 10,"=",STR_PAD_LEFT);
echo"<br>";
$str="ROHAN";
echo str_repeat($str, 10);
echo"<br>";
$str="good friend";

$arr1=str_split($str);
$arr2=str_split($str,5);
print_r($arr1);
print_r($arr2);
echo"<br>";

echo strcspn('abcd','Rzmit sonkar');
echo"<br>";
$text="Rohan\rsonkar";
echo stripcslashes($text);

$str1='hahdhk';
echo strlen($str1); 
echo"<br>";
$str='hi'=>'i','am', 'rohan';
echo s($str);








   


   
?>