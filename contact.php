<?php
// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Configuration de l'email
    $to = 'bajakcookie@gmail.com'; // votre adresse email
    $subject = 'Nouveau message depuis le site web';
    $text = 'Nom : ' . $name . ' Email : ' . $email . ' Message : ' . $message;
    $html = '<p>Nom : ' . $name . '</p><p>Email : ' . $email . '</p><p>Message : ' . $message . '</p>';

    try {
        if (mail($to, $subject, $text, 'From: ' . $email)) {
            $response = 'Email envoyé avec succès!';
        } else {
            throw new Exception('Une erreur est survenue lors de l\'envoi de l\'email.');
        }
    } catch (Exception $e) {
        $response = $e->getMessage();
    }
} else {
    $response = '';
}
?>

<?php include 'utilities/header.php';?>

<main>
    <style>
        body {
            background-color: #5F2B73;
            margin: 0;
            color: white;
            font-family: Arial, sans-serif;
            background-image: url('image/panelle.JPEG')!important;
        }
        h1 {
            border-bottom:20px;
        }

       .contact-container {
            display: flex;
            justify-content: center;
            margin-bottom: 10%!important;
           
        }
        label {
            display:flex;
        }
        form {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            padding: 20px;
            border-radius: 50px;
            background-color: #795548;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"],
        textarea {
            margin-bottom: 30px;
            padding: 8px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            width: -webkit-fill-available;
        }

        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #6d4c41;
            color: white;
            cursor: pointer;
            margin: 0 auto; 
            display: block; 
        }

        input[type="submit"]:hover{
            background-color: #5d4037;
        }

       .success,
       .error {
            margin-top: 20px;
            text-align: center;
        }

       .success {
            color: green;
        }

       .error {
            color: red;
        }

    </style>
</head>
<body>
<div class="col-md-12 text-center">
    <h1 class="display-4" style="font-family: 'Playfair Display', serif; color: #6d4c41;">Une question? </h1>
    <p class="lead" style="font-family: 'Lato', sans-serif; color: #6d4c41;">N'hésitez pas nous contacter!</p>
</div>

            </div>
    <div class="contact-container">
        <form method="post" action="">
            <fieldset>
                <label for="nom">Nom :</label>
                <input type="text"id="nom" name="name" required><br>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required><br>

                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required><br>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required><br>

                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

                <input type="submit" value="Envoyer">
            </fieldset>
        </form>
        <?php if ($response):?>
            <div class="<?= ($response === 'Email envoyé avec succès!')? 'success' : 'error' ?>"><?= $response ?></div>
        <?php endif ?>
    </div>

</main>

<?php include 'utilities/footer.php';?>