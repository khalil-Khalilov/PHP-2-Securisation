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

        textarea {
            resize: none;
            padding: 1rem;
            font-size: 1rem;
        }

        #form_container {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        form {
            width: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        label, textarea, input:last-child{
            margin-top: 1rem;
        }
    </style>
    <title>Les formulaires en PHP - 1. Récupération</title>
</head>

<body>

    <div id="form_container">
        <form action="thanks.php" method="POST">

            <label for="users_last-name">Nom :</label>
            <input type="text" id="users_last-name" name="users_last-name" for="users_last-name">

            <label for="users_first-name">Prenom :</label>
            <input type="text" id="users_first-name" name="users_first-name" for="users_first-name">

            <label for="users_email">Email :</label>
            <input type="email" id="users_email" name="users_email" for="users_email" placeholder="exemple@gmail.com">

            <label for="users_phone">Numéro de téléphone :</label>
            <input type="tel" id="users_phone" name="users_phone" for="users_phone">

            <label for="topics">Sujets :</label>
            <select name="topics" id="topics">
                <option disabled selected value> -- sélectionner une option -- </option>
                <option value="J'ai oublié mon mot de passe">J'ai oublié mon mot de passe</option>
                <option value="Mon compte a été volé">Mon compte a été volé</option>
                <option value="J'ai changé de lieu de résidence">J'ai changé de lieu de résidence</option>
                <option value="Comment dresser un dragon">Comment dresser un dragon</option>
                <option value="Comment tuer Thanos">Comment tuer Thanos</option>
            </select>


            <textarea id="users_message" name="users_message" for="users_message" cols="60" rows="10"></textarea>

            <input type="submit" value="ENVOYER">
        </form>

    </div>


</body>

</html>