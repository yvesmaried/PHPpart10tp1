<?php
require_once 'controller.php';
?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>TP 1</title>
    <style>
        body {
            background-color: #FFDAB9;
        }

        #idForm {
            background-color: #F5F5DC;
        }
    </style>
</head>

<body>
    <h1 class="d-flex justify-content-center">Part 10 tp 1</h1>

    <h2 class="d-flex justify-content-center">Formulaire La Manu</h2>
    <div id="idForm" class="">
        <?php if (!empty($_POST) && count($error) < 1) { ?>
        <p>Récapitulatif de votre enregistrement!</p>
        <p>NOM : <?= htmlspecialchars($_POST['lastname']) ?></p>
        <p>Prénom: <?= htmlspecialchars($_POST['firstname']) ?></p>
        <p>Date de naissance : <?= htmlspecialchars($_POST['birthdate']) ?></p>
        <p>Pays de naissance : <?= htmlspecialchars($_POST['nativecountry']) ?></p>
        <p>Nationalité : <?= htmlspecialchars($_POST['nationality']) ?></p>
        <p>Adresse : <?= htmlspecialchars($_POST['address']) ?></p>
        <p>address E-mail : <?= htmlspecialchars($_POST['emailadress']) ?></p>
        <p>Téléphone : <?= htmlspecialchars($_POST['phonenumber']) ?></p>
        <p>Diplôme : <?= htmlspecialchars($_POST['diploma']) ?></p>
        <p>Numéro pôle emploi : <?= htmlspecialchars($_POST['poleemploinumber']) ?></p>
        <p>Nombre de badge : <?= htmlspecialchars($_POST['badgenumber']) ?></p>
        <p>Liens codecademy : <?= htmlspecialchars($_POST['codecademylink']) ?></p>
        <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
            ? : <?= htmlspecialchars($_POST['superheroesquestion']) ?></p>
        <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :
            <?= htmlspecialchars($_POST['hackquestion']) ?></p>
        <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique
            avant de remplir ce formulaire ? : <?= htmlspecialchars($_POST['experiencequestion']) ?></p>
        <?php } else { ?>
    </div>
    <div id="idForm">
        <form action="" method="post" novalidate>
            <div class="form-group col-md-6">
                <label for="lastname">Nom :</label>
                <input class="form-control" id="lastname" type="text" name="lastname" placeholder="EX : DUPONT"
                    value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['lastname']) ? $error['lastname'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="firstname">Prénom :</label>
                <input class="form-control" id="firstname" type="text" name="firstname" placeholder="EX : PAUL"
                    value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['firstname']) ? $error['firstname'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="birthdate">Date de naissance :</label>
                <input class="form-control" id="birthdate" type="date" name="birthdate" placeholder="EX : 01/01/2020"
                    value="<?= isset($_POST['birthdate']) ? $_POST['birthdate'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['birthdate']) ? $error['birthdate'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="nativecountry">Pays de naissance :</label>
                <input class="form-control" id="nativecountry" type="text" name="nativecountry"
                    placeholder="EX : FRANCE"
                    value="<?= isset($_POST['nativecountry']) ? $_POST['nativecountry'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['nativecountry']) ? $error['nativecountry'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="nationality">Nationalité :</label>
                <input class="form-control" id="nationality" type="text" name="nationality" placeholder="EX : FRANCAISE"
                    value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['nationality']) ? $error['nationality'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="address">Adresse :</label>
                <input class="form-control" id="address" type="text" name="address"
                    placeholder="EX : 52 Rue de ce petit chemin qui sent la noisette"
                    value="<?= isset($_POST['address']) ? $_POST['address'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['address']) ? $error['address'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="emailadress">address E-mail :</label>
                <input type="email" class="form-control" id="emailadress" name="emailadress"
                    placeholder="EX : PAULDUPONT@GMAIL.COM"
                    value="<?= isset($_POST['emailadress']) ? $_POST['emailadress'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['emailadress']) ? $error['emailadress'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="phonenumber">Téléphone :</label>
                <input class="form-control" id="phonenumber" type="text" name="phonenumber"
                    placeholder="EX : 0699999999"
                    value="<?= isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['phonenumber']) ? $error['phonenumber'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="diploma">Diplôme :</label>
                <select class="form-control" name="diploma">
                    <option selected disabled>--</option>
                    <option value="Sans"
                        <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Sans' ? 'selected' : '' ?>>Sans</option>
                    <option value="Bac" <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Bac' ? 'selected' : '' ?>>
                        Bac</option>
                    <option value="Bac+2"
                        <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Bac+2' ? 'selected' : '' ?>>Bac+2</option>
                    <option value="Bac+3"
                        <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Bac+3' ? 'selected' : '' ?>>Bac+3</option>
                    <option value="Supérieur"
                        <?= isset($_POST['diploma']) && $_POST['diploma'] == 'Supérieur' ? 'selected' : '' ?>>Supérieur
                    </option>
                </select>
                <span class="text-danger"><?= isset($error['diploma']) ? $error['diploma'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="poleemploinumber">Numéro pôle emploi :</label>
                <input class="form-control" id="poleemploinumber" type="text" name="poleemploinumber" maxlength="8"
                    minlength="8" placeholder="EX : 12345567R"
                    value="<?= isset($_POST['poleemploinumber']) ? $_POST['poleemploinumber'] : '' ?>" required>
                <span
                    class="text-danger"><?= isset($error['poleemploinumber']) ? $error['poleemploinumber'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="badgenumber">Nombre de badge :</label>
                <input class="form-control" id="badgenumber" type="text" name="badgenumber" placeholder="EX : 1"
                    value="<?= isset($_POST['badgenumber']) ? $_POST['badgenumber'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['badgenumber']) ? $error['badgenumber'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="codecademylink">Liens codecademy :</label>
                <input class="form-control" id="codecademylink" type="text" name="codecademylink"
                    placeholder="EX : https://www.codecademy.com/"
                    value="<?= isset($_POST['codecademylink']) ? $_POST['codecademylink'] : '' ?>" required>
                <span class="text-danger"><?= isset($error['codecademylink']) ? $error['codecademylink'] : '' ?></span>
            </div>
            <div class="form-group col-md-6">
                <label for="superheroesquestion">Si vous étiez un super héros/une super héroïne, qui seriez-vous et
                    pourquoi
                    ? (60/400 mots) :</label>
                <textarea class="form-control" id="superheroesquestion" name="superheroesquestion" maxlength="400"
                    minlength="60"
                    required><?= isset($_POST['superheroesquestion']) ? $_POST['superheroesquestion'] : '' ?></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="hackquestion">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                    (60/400 mots) :</label>
                <textarea class="form-control" id="hackquestion" name="hackquestion" maxlength="400" minlength="60"
                    required><?= isset($_POST['hackquestion']) ? $_POST['hackquestion'] : '' ?></textarea>
            </div>
            <div class="form-group col-md-6">
                <label for="experiencequestion">Avez vous déjà eu une expérience avec la programmation et/ou
                    l'informatique
                    avant de remplir ce formulaire ? :</label>
                <div>oui <input type="radio" class="ml-1" name="experiencequestion" value="oui"
                        <?= isset($_POST['experiencequestion']) && $_POST['experiencequestion'] == 'oui' ? 'checked' : '' ?>>
                </div>
                <div>non <input type="radio" class="ml-1" name="experiencequestion" value="non"
                        <?= isset($_POST['experiencequestion']) && $_POST['experiencequestion'] == 'non' ? 'checked' : '' ?>>
                </div>
                <span
                    class="text-danger"><?= isset($error['experiencequestion']) ? $error['experiencequestion'] : '' ?></span>
            </div>

            <button type="submit" name="btnSubmit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <?php } ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>