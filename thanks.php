<?php
$required = "required";

if (!empty($_POST['users_last-name']) && !empty($_POST['users_first-name']) && !empty($_POST['users_email']) && 
!empty($_POST['users_phone']) && !empty($_POST['topics']) && !empty($_POST['users_message'])) {

    $firstName = htmlspecialchars(trim($_POST['users_first-name']));
    $lastName = htmlspecialchars(trim($_POST['users_last-name']));
    $usersEmail = htmlspecialchars(trim(filter_var($_POST['users_email'], FILTER_VALIDATE_EMAIL)));
    $usersPhone = (int)htmlspecialchars(trim($_POST['users_phone']));
    $topics = htmlspecialchars(trim($_POST['topics']));
    $usersMessage = htmlspecialchars(trim($_POST['users_message']));
    
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p {
            width: 800px;
            margin: auto;
            line-height: 1.2rem;
            border: 1px solid black;
            padding: 1rem;
            text-align: justify;
        }
    </style>

    <title>Profile</title>
</head>

<body>
    <a href="index.php">Return</a>
    <p> Merci <?=$firstName?> <?= $lastName; ?> de nous avoir contacté à propos de “<?= $topics; ?>”.
        Un de nos conseiller vous contactera soit à l’adresse <?= $usersEmail; ?> ou par téléphone au <?= $usersPhone; ?>
        dans les plus brefs délais pour traiter votre demande : <?= $usersMessage; ?>
    </p>
</body>

</html>