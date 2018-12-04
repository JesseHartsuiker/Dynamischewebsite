<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 3-12-2018
 * Time: 10:00
 */


if ($_POST ['voornaam'] ==""){
    echo "Je moet nog een naam invulllen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}
if ($_POST ['adres'] ==""){
    echo "Je moet nog een adres invulllen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}
if ($_POST ['email'] ==""){
    echo "Je moet nog een email invulllen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}
if ($_POST ['wachtwoord'] ==""){
    echo "Je moet nog een wachtwoord. invulllen!";
    echo "<br><a href=\"formulier.html\">Terug naar het formulier</a>";
}