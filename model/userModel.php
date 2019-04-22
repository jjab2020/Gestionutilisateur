<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/config.php';
function getAllUsers()
{
    my_connect();
    $query = 'SELECT id_UTILISATEUR, nom_UTILISATEUR, email_UTILISATEUR, naissance_UTILISATEUR FROM `utilisateur` ORDER BY id_UTILISATEUR DESC';
    $result = my_fetch_all($query);
    if (is_null($result)) {
        $errors['users'] = 'Erreur dans la récupération des utilisateurs.';
        return false;
    } else {
        return $result;
    }
}
function user_auth($username, $password)
{
    my_connect();
    $query = 'SELECT id_UTILISATEUR, nom_UTILISATEUR, email_UTILISATEUR  FROM `utilisateur` WHERE `nom_UTILISATEUR`=\''.my_escape($username).'\' AND `password_UTILISATEUR`=\''.md5($password).'\'';
    $result = my_fetch_one($query);
    if (is_null($result)) {
        $errors['login'] = 'Identifiants incorrects';
        return false;
    } else {
        return $result;
    }
}
function createNewUser($username, $email, $password,$naissance)
{
    my_connect();
    $query = 'INSERT INTO `utilisateur` (`nom_UTILISATEUR`, `email_UTILISATEUR`, `password_UTILISATEUR`, `naissance_UTILISATEUR`)VALUES (\''.my_escape($username).'\', \''.my_escape($email).'\', \''.md5($password).'\', \''.$naissance.'\')';
    my_query($query);
}

function validate($username, $email, $password,$naissance)
{
    $errors = [];
    if(!isset($username) || empty($username)) {
        $errors['username'] = "Nom d'utilisateur obligatoire";
    }
    if(!isset($email) || empty($email)) {
        $errors['email'] = "Adresse e-mail obligatoire";
    }
    if(!isset($password) || empty($password)) {
        $errors['password'] = "Mot de passe obligatoire";
    }
    if(!isset($naissance) || empty($naissance)) {
        $errors['naiss'] = "date de naissance obligatoire";
    }
    if(!preg_match("/[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})/i", $email)){
        $errors['email_not_email'] = "L'adresse e-mail n'est pas valide.";
    }   
    return $errors;
}