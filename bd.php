<?php
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/About.php';

$movies = [
    new Movie('Avatar','Fantascienza','Inglese','https://www.themoviedb.org/t/p/original/u7IcSowW5C7Se3HO4J3QDiTOphi.jpg'),
    new Movie('Batman','Polizzesco','Americano','https://www.themoviedb.org/t/p/original/53lvq1hrL8NcFW1VXEhfXH0UmWt.jpg'),
    new Movie('Romanzo Criminale','Drammatico','Italiano','https://www.themoviedb.org/t/p/original/jd06ZOSBpjfKEthqli5O2urO0nm.jpg'),
    new Movie('Sonic 2','Azione','Tedesco','https://www.themoviedb.org/t/p/original/6hsbaKssGeuXYbl4h65h39aoq9c.jpg'),
    new Movie('Troppo Cattivi','Animazione','Francese','https://www.themoviedb.org/t/p/original/3eZ2QQWbhH13jk3EL2NAC2xb2ww.jpg'),
    new Movie('Avatar','Fantascienza','Inglese','https://www.themoviedb.org/t/p/original/u7IcSowW5C7Se3HO4J3QDiTOphi.jpg'),
    new Movie('Batman','Polizzesco','Americano','https://www.themoviedb.org/t/p/original/53lvq1hrL8NcFW1VXEhfXH0UmWt.jpg'),
    new Movie('Romanzo Criminale','Drammatico','Italiano','https://www.themoviedb.org/t/p/original/jd06ZOSBpjfKEthqli5O2urO0nm.jpg'),
    new Movie('Sonic 2','Azione','Tedesco','https://www.themoviedb.org/t/p/original/6hsbaKssGeuXYbl4h65h39aoq9c.jpg'),
    new Movie('Troppo Cattivi','Animazione','Francese','https://www.themoviedb.org/t/p/original/3eZ2QQWbhH13jk3EL2NAC2xb2ww.jpg'),
    new Movie('Avatar','Fantascienza','Inglese','https://www.themoviedb.org/t/p/original/u7IcSowW5C7Se3HO4J3QDiTOphi.jpg'),
    new Movie('Romanzo Criminale','Drammatico','Italiano','https://www.themoviedb.org/t/p/original/jd06ZOSBpjfKEthqli5O2urO0nm.jpg'),
    new Movie('Sonic 2','Azione','Tedesco','https://www.themoviedb.org/t/p/original/6hsbaKssGeuXYbl4h65h39aoq9c.jpg'),
    new Movie('Troppo Cattivi','Animazione','Francese','https://www.themoviedb.org/t/p/original/3eZ2QQWbhH13jk3EL2NAC2xb2ww.jpg'),
    new Movie('Sonic 2','Azione','Tedesco','https://www.themoviedb.org/t/p/original/6hsbaKssGeuXYbl4h65h39aoq9c.jpg'),
    new Movie('Troppo Cattivi','Animazione','Francese','https://www.themoviedb.org/t/p/original/3eZ2QQWbhH13jk3EL2NAC2xb2ww.jpg')
];

$abouts =[
    new About('Avatar','Fantascienza','Inglese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Batman','Polizzesco','Americano','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Romanzo Criminale','Drammatico','Italiano','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Sonic 2','Azione','Tedesco','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Troppo Cattivi','Animazione','Francese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Avatar','Fantascienza','Inglese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Batman','Polizzesco','Americano','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Romanzo Criminale','Drammatico','Italiano','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Sonic 2','Azione','Tedesco','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Troppo Cattivi','Animazione','Francese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Avatar','Fantascienza','Inglese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Romanzo Criminale','Drammatico','Italiano','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Sonic 2','Azione','Tedesco','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Troppo Cattivi','Animazione','Francese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Sonic 2','Azione','Tedesco','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis'),
    new About('Troppo Cattivi','Animazione','Francese','Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos, beatae inventore laudantium nisi ipsum culpa fuga excepturi aliquid ad doloribus consequatur laboriosam veritatis at. Sed esse veritatis')
];