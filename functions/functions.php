<?php
// PASSWORD GENERATION
function generate_password($password_length) 
{

    // available chars
    $numeric_chars = '01234567890';
    $lc_chars='abcdefghijklmnopqrstuvwxyz';
    $up_chars = strtoupper($lc_chars);
    $special_chars = '?!.,-_+*{}[]£$%&/()=';
    
    // allowed ones
    $allowed_chars = $numeric_chars . $lc_chars . $up_chars . $special_chars;
    
    // generation 
    $generated_password = '';
        for ($i = 0; $i < $password_length; $i++) {
            $generated_password .= generate_random_chars($allowed_chars);
        }
        return $generated_password;
}
    
// RANDOM CHARS GENERATION
function generate_random_chars($charset) 
{
    $min = 0;
    $max = strlen($charset) - 1;
    $random_char_index = rand($min, $max);
    $random_char = $charset[$random_char_index];
    return $random_char;
}

?>
