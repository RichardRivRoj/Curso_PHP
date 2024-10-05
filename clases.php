<?php

declare(strict_types=1);

class SuperHero {
    // promoted properties -> PHP 8

    public function __construct(
        private string $name, 
        public array $powers, 
        public string $planet)
    {
    }

    public function attack() {
        return "$this->name ataca con sus poderes!";
    }

    public function show_all() {
        return get_object_vars($this);

    }

    public function description() {

        $powers = implode(", ", $this->powers);
        return "$this->name es un superheroe que viene de $this->planet 
        y tiene los siguentes poderes: $powers";
    }

    public static function random () {

        $names = ["Thor", "Spiderman", "Wolverine", "Iroman", "Hulk"];
        $powers = [
            ["Superfuerza", "Volar", "Rayos laser"],
            ["Superfuerza", "Super agilidad", "Telarañas"],
            ['Regeneracion', "Superfuerza", "Garras"],
            ["Superfuerza", "Caer", "Rayos laser"],
            ["Super fuerza", "Super agilidad", "Cambio de tramaño"]
        ];
        $planets = ["Asgard", "Hulkwordl", "Tierra", "IronWorld"];

        $name = $names[array_rand($names)];
        $power = $powers[array_rand($powers)];
        $planet = $planets[array_rand($planets)];

        return new self($name, $power, $planet);
    }

}

// Metodos estaticos
$hero = SuperHero::random();
echo $hero->description()

// Instanciar
//$hero = new SuperHero("Spiderman",["Superfuerza", "Super agilidad", "Telarañas"], "Tierra" );
//$hero->description();

?>

