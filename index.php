<?php

$form_submitted = isset($_GET);
$password_length = $_GET['password'] ?? '';

if($form_submitted) {
    $numeric_chars = '01234567890';
    $lc_chars='abcdefghijklmnopqrstuvwxyz';
    $up_chars = strtoupper($lc_chars);
    $special_chars = '?!.,-_+*{}[]£$%&/()=';

    $allowed_chars = $numeric_chars . $lc_chars . $up_chars . $special_chars;
    $generated_password = '';

    for ($i = 0; $i < $password_length; $i++) {

        $min = 0;
        $max = strlen($allowed_chars) - 1;

        $random_char_index = rand($min, $max);
        $random_char = $allowed_chars[$random_char_index];

        $generated_password .= $random_char;
    }

var_dump($generated_password);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Password generator</h1>
        <form action="" method="GET">
            <label for="password" class="password">Choose the length of your password</label>
            <input type="number" name="password" min="3" max="20" value="<?php $password_length ?>">
            <button class="btn btn-primary">Genera password</button>
            <div class="generated-password">Your secure password is:</div>

        </form>
    </div>
    
</body>
</html>