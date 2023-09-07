<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulaire de Contact</h1>
        
        <form action="Traitement.php" method="post">
            <div class="form-groupe">
                <label for="nom">Votre nom :</label>
                <input type="text" id="nom" name="nom" placeholder = "Vos nom et prénom"required>
            </div>
            <div class="form-group">
                <label for="email">Votre mail :</label>
                <input type="email" id="email" name="email" placeholder = "Votre adresse mail" required>
            </div>
            <div class="form-group">
                <label for="tel">Votre numéro de téléphone :</label>
                <input type="tel" id="tel" name="tel" placeholder = "Indiquez votre numéro" required>
            </div>
            <div class="form-group">
                <label for="sujet">Sujet (*):</label>
                <input type="text" id="sujet" name="sujet" placeholder = "Le sujet de votre message" required>
            </div>
            <div class="form-group">
                <label for="message">Message (*):</label>
                <textarea id="message" name="message" placeholder = "Veuillez entrer votre message ici" required></textarea>
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" id="accepter" name="accepter" required> En soumettant ce formulaire, <span class = "bold">j'accepte la politique de confidentialité</span> du site.
                </label>
            </div>
            <button type="submit">Valider</button>
        </form>
        <p class="caption">(*) Champs obligatoires</p>
    </div>
</body>
</html>
