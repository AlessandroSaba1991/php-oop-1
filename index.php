<?php
/* 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
 vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/
require_once __DIR__ . '/Models/Movie.php';

$avatar=new Movie('Avatar','Fantascienza','Inglese');
$batman=new Movie('Batman','Polizzesco','Americano');
$romanzo_criminale=new Movie('Romanzo Criminale','Drammatico','Italiano');

echo $avatar->getTitle() . "<br>";
echo $batman->getTitle() . "<br>";
echo $romanzo_criminale->getTitle() . "<br>";

$avatar->setTitle('Avatar 2.0');
$batman->setTitle('Batman: Arkham Asylium');
$romanzo_criminale->setTitle('Romanzo Criminale: La Serie');

echo $avatar->getTitle() . "<br>";
echo $batman->getTitle() . "<br>";
echo $romanzo_criminale->getTitle() . "<br>";

var_dump($avatar,$batman,$romanzo_criminale);