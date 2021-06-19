<?php

//Strings
$string_1 = "get-books-count";
$string_2 = "Set_Currency_Value";
$string_3 = "FiRst_New-string";

//Output
noFormat($string_1);
echo '<br>';
noFormat($string_2);
echo '<br>';
noFormat($string_3);
echo '<br><br>';
toCamelCase($string_1);
echo '<br>';
toCamelCase($string_2);
echo '<br>';
toCamelCase($string_3);


function noFormat($string){
    echo $string;
}

function toCamelCase($string){

    //States
    define("DEFAULT_STATE",  1);
    define("CHAR_UP",        2);
    
    $state = DEFAULT_STATE; 
    $idx = 0;

    while ($ch = $string[$idx]) {
       
        switch ($state) {

            case DEFAULT_STATE:

                switch ($ch) {
                    case '-':
                        $string[$idx] = ' ';
                        $state = CHAR_UP;
                    break;

                    case '_':
                        $string[$idx] = ' ';
                        $state = CHAR_UP;
                    break;
                }

            break;

            case CHAR_UP:
                if (ctype_upper($ch)) {
                    $state = DEFAULT_STATE;
                } else {
                    $string[$idx] = strtoupper($ch);
                    $state = DEFAULT_STATE;
                }
            break;
        }
        $idx++;
    }

    $string = str_replace(" ", '', $string); //Delete all spaces

    echo $string;
}

?>