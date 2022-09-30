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
    <p> Merci <?= $_POST['users_first-name']; ?> <?= $_POST['users_last-name']; ?> de nous avoir contacté à propos de “<?= $_POST['topics']; ?>”.
        Un de nos conseiller vous contactera soit à l’adresse <?= $_POST['users_email']; ?> ou par téléphone au <?= $_POST['users_phone']; ?>
        dans les plus brefs délais pour traiter votre demande : <?= $_POST['users_message']; ?>
    </p>
</body>

</html>