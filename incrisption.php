<?php
require_once'config.php';
if(isset($_POST['nom'])) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['password'])
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$email = htmlspecialchars($_POST['email']);
$password = sha1($_POST['password']);

$check = $bdd->prepare('SELECT nom,prenom,email,password FROM utulisateurs WHERE email = ?'); 
 $check->execute(array($email));
 $data= $check->fetch();
 $row = $check->rowCount();
 if($row == 0);