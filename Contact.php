<?php

$tab=['Nom','Prenom','Email','Telephone','Adresse','Code Postal'];
$testValue =false;
foreach ($tab as $key) {
    if (!isset($_GET[$key]) || empty(trim($_GET[$key])) ) {
        $testValue =true;
        break;
    }
    
}
if ($testValue){
    echo "<h1> Champs manquants</h1>";
}
else {
    $formDATA= array();
    foreach ($tab as $key) {
        $formDATA[$key]= $_GET[$key];
        }
    echo "<h1>Donnees du Formulaire de Contact</h1>";
    echo "<table border='1'>
            <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Email</td>
            <td>Telephone</td>
            <td>Adresse</td>
            <td>CodePostal</td>
            </tr>
            <tr>
            <td>{$formDATA['Nom']}</td>
            <td>{$formDATA['Prenom']}</td>
            <td>{$formDATA['Email']}</td>   
            <td>{$formDATA['Telephone']}</td>
            <td>{$formDATA['Adresse']}</td>
            <td>{$formDATA['CodePostal']}</td>

            </tr>
            </table>";
    }   

?>