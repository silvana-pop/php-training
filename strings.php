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
echo "<br><br>12. Write a PHP script to get the filename component of the following path.<br>Sample path : 'http://www.w3resource.com/index.php'<br>Expected Output : 'index'<br>";

$string10 = 'http://www.w3resource.com/index.php';
$arr4 = preg_split('//', $string10);

print_r($arr4);
?>
