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

echo "<h2>Print all attributes</h2>";
echo "<h4> Avatar </h4>";
echo $avatar->title . "<br>";
echo $avatar->genre . "<br>";
echo $avatar->language . "<br>";
echo "<h4> Batman </h4>";
echo $batman->title . "<br>";
echo $batman->genre . "<br>";
echo $batman->language . "<br>";
echo "<h4> Romanzo Criminale </h4>";
echo $romanzo_criminale->title . "<br>";
echo $romanzo_criminale->genre . "<br>";
echo $romanzo_criminale->language . "<br>";

echo "<h2>Print all attributes with Method</h2>";
echo "<h4> Avatar </h4>";
echo $avatar->getTitle() . "<br>";
echo $avatar->getGenre() . "<br>";
echo $avatar->getLanguage() . "<br>";
echo "<h4> Batman </h4>";
echo $batman->getTitle() . "<br>";
echo $batman->getGenre() . "<br>";
echo $batman->getLanguage() . "<br>";
echo "<h4> Romanzo Criminale </h4>";
echo $romanzo_criminale->getTitle() . "<br>";
echo $romanzo_criminale->getGenre() . "<br>";
echo $romanzo_criminale->getLanguage() . "<br>";

$avatar->setTitle('Avatar 2.0');
$batman->setTitle('Batman: Arkham Asylium');
$romanzo_criminale->setTitle('Romanzo Criminale: La Serie');

echo "<h2>Print Title with Method after Set Title Method</h2>";
echo "<h4> Avatar </h4>";
echo $avatar->getTitle() . "<br>";
echo "<h4> Batman </h4>";
echo $batman->getTitle() . "<br>";
echo "<h4> Romanzo Criminale </h4>";
echo $romanzo_criminale->getTitle() . "<br>";

//var_dump($avatar,$batman,$romanzo_criminale);