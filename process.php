<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $password = htmlspecialchars($_POST['password']);
    $gender = htmlspecialchars($_POST['gender']);
} else {
    echo "Invalid request!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Registration Successful!</h1>
        <p><strong>Full Name:</strong> <?= $name ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Phone Number:</strong> <?= $phone ?></p>
        <p><strong>Gender:</strong> <?= $gender ?></p>
    </div>
</body>
</html>
