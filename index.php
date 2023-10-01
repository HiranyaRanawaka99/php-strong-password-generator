<?php

include __DIR__ . '/functions/functions.php';

// MAIN LOGIC
$form_submitted = isset($_GET);
$password_length = $_GET['password'] ?? '';

if($form_submitted) {
    $generated_password = generate_password($password_length);
// var_dump($generated_password);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Generate password</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Password generator</h1>
        <form action="" method="GET">
            <div class="generate-password">
                <label for="password" class="password">Choose the length of your password</label>
                <input type="number" name="password" min="3" max="20" value="<?php $password_length ?>">
                <br>
                <button class="btn btn-primary">Genera password</button>
            </div>
            <hr>
            <div class="generated-password">Your secure password is: <?= $generated_password?></div>

        </form>
    </div>
    
</body>
</html>