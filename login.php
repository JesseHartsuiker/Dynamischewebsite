<?php
$username = $_POST['email'];
$password = $_POST['wachtwoord'];

if (
($username == 'jesse' && $password == '123')||
($username == 'klaas@carpets.nl' && $password == 'snoepje777')||
($username == 'truushendriks@wegweg.nl' && $password == 'arkiearkie201')
){
    echo 'Welkom!';
} else{
    echo 'Verkeerde gebruikersnaam of wachtwoord!!!';
}

