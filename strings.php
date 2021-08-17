<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>PART 1</h1>

<?php
// 1
echo "1. Write a PHP script to: ";

// a
echo "<br>a. transform a string all uppercase letters.<br>";

$string = "This Is A String";
echo strtoupper($string);

// b
echo "<br><br>b. transform a string all lowercase letters.<br>";

echo strtolower($string);

// c
echo "<br><br>c. make a string's first character uppercase.<br>";

$string2 = "this is a string";
echo ucfirst($string2);

// d
echo "<br><br>d. make a string's first character of all the words uppercase.<br>";

echo ucwords($string2);

// 2
echo "<br><br>2. Write a PHP script to split the following string.<br>Sample string : '082307'<br>Expected Output : 08:23:07<br>";
$string3 = '082307';

$arr = str_split($string3, 2);
echo implode(':', $arr);

// 3
echo "<br><br>3. Write a PHP script to check if a string contains specific string<br>Sample string : 'The quick brown fox jumps over the lazy dog.'<br>Check whether the said string contains the string 'jumps'.<br>";
$string4 = 'The quick brown fox jumps over the lazy dog.';

if (strstr($string4, 'jumps') != NULL)
    echo "The said string contains the string 'jumps'.";
else echo "The said string does not contain the string 'jumps'.";

// 4
echo "<br><br>4. Write a PHP script to convert the value of a PHP variable to string.<br>";

$var = 12345;
$val_string = strval($var);
echo gettype($val_string);

// 5
echo "<br><br>5.Write a PHP script to extract the file name from the following string.<br>Sample String : 'www.example.com/public_html/index.php'<br>Expected Output : 'index.php'<br>";

$string5 = 'www.example.com/public_html/index.php';
$arr2 = explode('/', $string5);
echo $arr2[count($arr2) - 1];

// 6
echo "<br><br>6. Write a PHP script to extract the user name from the following email ID.<br>Sample String : 'rayy@example.com'<br>Expected Output : 'rayy'<br>";

$string6 = 'rayy@example.com';
$arr3 = preg_split('/@./', $string6);
echo $arr3[0];

// 7
echo "<br><br>7. Write a PHP script to get the last three characters of a string.<br>Sample String : 'rayy@example.com'<br>Expected Output : 'com'<br>";

echo substr($string6, strlen($string6) - 3, 3);

// 8
echo "<br><br>8. Write a PHP script to format values in currency style.<br>Sample values : value1 = 65.45, value2 = 104.35<br>Expected Result : 169.80<br>";

$value1 = 65.45;
$value2 = 104.35;

echo number_format($value1 + $value2, 2);

// 9
echo "<br><br>9. Write a PHP script to generate simple random password [do not use rand() function] from a given string.<br>Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'<br>Note : Password length may be 6, 7, 8 etc.<br>";

$sample = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';

echo substr(str_shuffle($sample), 0, 8);

// 10
echo "<br><br>10. Write a PHP script to replace the first 'the' of the following string with 'That'.<br>Sample date : 'the quick brown fox jumps over the lazy dog.'<br>Expected Result : That quick brown fox jumps over the lazy dog.<br>";

$string7 = 'the quick brown fox jumps over the lazy dog.';

echo substr_replace($string7, 'That', strpos($string7, 'the'), strlen('the'));

// 11
echo "<br><br>11. Write a PHP script to find first character that is different between two strings.<br>String1 : 'football'<br>String2 : 'footboll'<br>Expected Result : First difference between two strings at position 5: 'a' vs 'o'.<br>";

$string8 = 'football';
$string9 = 'footboll';
for ($i = 0; $i < strlen($string8); $i++) {
    if (strncasecmp($string8, $string9, $i) != 0) {
        echo "First difference between two strings at position ", $i-1, ": '", substr($string8, $i-1, 1) ,"' vs '", substr($string9, $i-1, 1),"'.";
        break;
    }
}
// 12
$string10 = 'http://www.w3resource.com/index.php';
$arr7 = preg_split('/[.\s\/]/', $string10);
echo '<br><br>12. ', $arr7[count($arr7)-2];

// 13
$var = 'a';
if ($var == 'z')
    echo '<br><br>13. a';
else
    echo '<br><br>13. ', chr(ord($var)+1);

// 14
echo '<br><br>14. ', substr($string6, strpos($string6, '@')+1);

// 15
echo '<br><br>15. ', bin2hex($string6);

// 16
$string11 = 'The brown fox';
echo '<br><br>16. ', substr_replace($string11, 'quick ', strpos($string11, 'brown'), 0);

// 17
$string12 = 'The quick brown fox';
$arr4 = explode(' ',trim($string12));

echo '<br><br>17. ', $arr4[0];

// 18
$string13 = '000547023.24';
echo '<br><br>18. ', ltrim($string13, '0');

// 19
$string14 = 'The quick brown fox jumps over the lazy dog';

echo '<br><br>19. ', str_replace("fox", "", $string14);

// 20
$string15 = 'The quick brown fox jumps over the lazy dog///';
echo '<br><br>20. ', rtrim($string15, '/');

// 21
$string16 = 'http://www.example.com/5478631';
$arr5 = explode('/', $string16);
echo '<br><br>21. ', $arr5[count($arr5) - 1];

// 22
$string17 = '\"\1+2/3*2:2-3/4*3';
echo '<br><br>22. ', str_replace(array('+', '-', '*', '/', '"', ':', "\\"), " ", $string17);

// 23
echo '<br><br>23. ';
$arr6 = explode(' ', $string14);
for($i = 0; $i < 5; $i++)
    echo $arr6[$i], " ";


// 24
$string18 = '2,543.12';
echo '<br><br>24. ', str_replace(',', "", $string18);

// 25
echo '<br><br>25. ';
for ($i = ord('a'); $i < ord('z'); $i++) {
    echo chr($i);
}

// 26
$d = 'A00';
echo '<br><br>26. ',++$d;

?>
        <h1>PART 2</h1>
<?php
// 1
$color = array('white', 'green', 'red', 'blue', 'black');
echo "1. The memory of that scene for me is like a frame of film forever frozen at that moment: the ", $color[2] ," carpet,
the ", $color[1], " lawn, the ", $color[0], " house, the leaden sky. The new president and his first lady. - Richard M.
Nixon<br><br>";

// 2
echo '2. ';
$color = array('white', 'green', 'red');
echo implode(', ', $color);
sort($color);
for($i = 0; $i < count($color); $i++) {
    echo "<br>";
    echo $color[$i];
}

// 3
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
    Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw");

echo "<br><br>3. ";
ksort($ceu);
foreach ($ceu as $country => $capital)
    echo "<br>The capital of $country is $capital.";

// 4
$x = array(1, 2, 3, 4, 5);
unset($x[3]);
sort($x, SORT_NUMERIC);
echo '<br><br>4. ';
print_r($x);

// 5
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo '<br><br>5. ', $color[4], '<br><br>';

// 6
$json = '{"Title":"The Cuckoos Calling","Author":"Robert Galbraith","Detail":{"Publisher":"Little Brown"}}';
$arr8 = json_decode($json, true);
echo '6. ';
foreach ($arr8 as $x => $y) {
    if (is_string($y))
        echo '<br>', $x, ' : ', $y;
    else foreach ($y as $z => $w)
        echo '<br>', $z, ' : ', $w;
}

// 7
$arr9 = [1,2,3,4,5];
echo '<br><br>7. ';
array_splice($arr9, 3, 0, '$');
print_r($arr9);

// 10


?>
    </body>
</html>