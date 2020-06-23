<?php
$nameRegex = '/^[A-Za-zA-Zéèêëiîïôöüäç]{1,30}$/';
$urlRegex = '/((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/';
$emailRegex = '/^[^\W][a-zA-Z0-9-_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
$adresseRegex ='/^[1-9]{1}+[0-9]{0,2}[, ]{1}[ a-zA-Zéèêëiîïôöüäç]{1,11}[, \"-]{1}?[ a-zA-Zéèêëiîïôöüäç]{2,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{0,12}?[, \"-]{0,1}?[ a-zA-Zéèêëiîïôöüäç]{1,12}?$/';
$poleEmploiRegex = '/[0-9]{7}[a-zA-Z]{1}/'; 
$badgesRegex = '/^[0-9]{1,2}$/';
$phoneNumberRegex = '/(0)+[0-9]{1}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}( ){0,1}+[0-9]{2}/';
$dateRegex = '/^(1|2)+[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/';
$error= array();
var_dump($_POST);
if (isset($_POST['lastname'])) {  
    if (!preg_match($nameRegex, $_POST['lastname'])) {
        $error['lastname'] = 'Mauvais format';
    };
    if (empty($_POST['lastname'])) {
        $error['lastname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['firstname'])) {    
    if (!preg_match($nameRegex, $_POST['firstname'])) {
        $error['firstname'] = 'Mauvais format';
    };
    if (empty($_POST['firstname'])) {
        $error['firstname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['birthdate'])) {    
    if (!preg_match($dateRegex, $_POST['birthdate'])) {
        $error['birthdate'] = 'Mauvais format';
    };
    if (empty($_POST['birthdate'])) {
        $error['birthdate'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['codecademylink'])) {    
    if (!filter_var($_POST['codecademylink'], FILTER_VALIDATE_URL)) {
        $error['codecademylink'] = 'Mauvais format';
    };
    if (empty($_POST['codecademylink'])) {
        $error['codecademylink'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['emailadress'])) {    
    if (!filter_var($_POST['emailadress'], FILTER_VALIDATE_EMAIL)) {
        $error['emailadress'] = 'Mauvais format';
    };
    if (empty($_POST['emailadress'])) {
        $error['emailadress'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['nativecountry'])) {  
    if (!preg_match($nameRegex, $_POST['nativecountry'])) {
        $error['nativecountry'] = 'Mauvais format';
    };
    if (empty($_POST['nativecountry'])) {
        $error['nativecountry'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['nationality'])) {  
    if (!preg_match($nameRegex, $_POST['nationality'])) {
        $error['nationality'] = 'Mauvais format';
    };
    if (empty($_POST['nationality'])) {
        $error['nationality'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['address'])) {  
    if (!preg_match($adresseRegex, $_POST['address'])) {
        $error['address'] = 'Mauvais format';
    };
    if (empty($_POST['address'])) {
        $error['address'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['poleemploinumber'])) {  
    if (!preg_match($poleEmploiRegex, $_POST['poleemploinumber'])) {
        $error['poleemploinumber'] = 'Mauvais format';
    };
    if (empty($_POST['poleemploinumber'])) {
        $error['poleemploinumber'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['badgenumber'])) {  
    if (!preg_match($badgesRegex, $_POST['badgenumber'])) {
        $error['badgenumber'] = 'Mauvais format';
    };
    if (empty($_POST['badgenumber'])) {
        $error['badgenumber'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['phonenumber'])) {    
    if (!preg_match($phoneNumberRegex, $_POST['phonenumber'])) {
        $error['phonenumber'] = 'Mauvais format';
    };
    if (empty($_POST['phonenumber'])) {
        $error['phonenumber'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['btnSubmit'])) {    
    if (!array_key_exists('diploma', $_POST)) {
        $error['diploma'] = 'Veuillez renseigner le champ';
    };
    if (isset($_POST['diploma'])) {
        if (!($_POST['diploma'] == 'Sans' || $_POST['diploma'] == 'Bac' || $_POST['diploma'] == 'Bac+2' || $_POST['diploma'] == 'Bac+3' || $_POST['diploma'] == 'Supérieur')) {
            $error['diploma'] = 'Veuillez choisir parmis les choix proposés';
        }
    }
}
