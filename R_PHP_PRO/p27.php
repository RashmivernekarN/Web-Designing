<?php
/* String Functions*/
// 1. string length
                        $student="Vijay";
                        echo strlen($student);
                        echo "<br/>";

// 2. string count
                        $institute="Keonics Computer Training Center";
                        echo $institute;
                        echo "<br/>";
                        echo str_word_count($institute);
                        echo "<br/>";

//3. Reverse the String
                        echo $student;
                        echo "<br/>";
                        echo strrev($student);
                        echo "<br/>";

//4. Finding the Text withing the String
                        $data="Welcome to Kenoics Computer Training Center";
                        echo $data;
                        echo "<br/>";
                        echo strpos($data,"Kenoics");
                        echo "<br/>";

//5. Replacing text within a String
                        $info="I am Learning Computer";
                        echo $info;
                        echo "<br/>";
                        echo str_replace("Computer", "PHP Programing Language", $info);
                        echo "<br/>";

//6. Converts Every First Alphabet to Upper Case
                        echo ucwords("welcome to php");
                        echo "<br/>";

//7.Converts Whole String to Upper Case
                        echo strtoupper("welcome to PHP");
                        echo "<br/>";

//8. Converts Whole String to Lower Case
                        echo strtolower("WELCOME TO PHP");
                        echo "<br/>";

//9. Repeating the String
                        echo str_repeat("=", 13);
                        echo "<br/>";

//10. Comparing Strings
                        /*
                        This function returns:
                        0 - if the two strings are equal
                        <0 - if string1 is less than string2
                        >0 - if string1 is greater than string2

                        ASCII Value of A-65 a-97
                        */
                        $string1="Welcome";
                        $string2="WELCOME";
                        echo "String 1".$string1;
                        echo "<br/>";
                        echo "String 2".$string2;
                        echo "<br/>";
                        echo strcmp($string1, $string2);
                        echo "<br/>";

//11. Displaying part of the String
                        $string3="Welcome to PHP Strings";
                        echo $string3;
                        echo "<br/>";
                        echo substr($string3, 7);
                        echo "<br/>";
                        echo substr($string3, 0,6);
                        echo "<br/>";

//12. Removing white spaces from String
                        $string ="Web Development";
                        echo $string;
                        echo "<br/>";
                        echo trim("$string","Web");
?>