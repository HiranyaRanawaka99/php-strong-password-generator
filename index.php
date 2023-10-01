<?php

include_once  './functions/functions.php';

// MAIN LOGIC
$form_submitted = isset($_GET ['password']);
$password_length = (int) $_GET['password'] ?? '';

if($form_submitted) {
    session_start();
    $_SESSION['generated_password'] = generate_password($password_length);
    header('Location: generated.php');
// var_dump($generated_password);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <?php include __DIR__ .'/template/head.php' ?>
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
        </form>
    </div>
    
</body>
</html>