<?php
    $name = "Richard";
    $is_dev = true;
    $age = 21;    
    $is_old = $age > 40;

    /*
    if ($is_old) {
        echo "<h2> Eres Viejo, lo siento </h2>";
    } else if ($age >= 18 and $age <= 40) {
        echo "<h2>Eres un aduto chiquito</h2>";
    }
    else {
        echo "<h2> Eres joven, felicidades</h2>";
    }
    */

    define('LOGO_URL', 'https://th.bing.com/th?id=OIP.CmR_xQULrXJrBNo7Q4EUYgHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&cb=13&dpr=1.2&pid=3.1&rm=2');

    //is_string($name); // Comparcion de tipo de dato
    //echo gettype($is_dev); // Envia el tipo de dato
    //var_dump($age); // Envia informacion del dato

    $output = "Hola $name mi edad es: $age 😘";

    const NOMBRE = 'Miguel';

    /*
    $output_age = ($is_old)
    ? 'Eres viejo'
    : 'Eres Joven';
    */

    $output_age = match (true) {
        $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un nino, $name",
        $age < 18 => "Eres un adolescente, $name",
        $age === 18 => "Eres mayor de edad, $name",
        $age < 40 => "Eres un adulto, $name",
        $age < 100 => "Eres un viejo, $name",
        default => "Hueles a formon, $name"
    };

    $bestLanguage = ["PHP", "JavaScripts", "Python", 1, 2];
    $bestLanguage[] = "Java";
    $bestLanguage[] = "C++";


    $person = [
        "name" => "Richard",
        "age" => 78,
        "isDev" => true,
        "languages" => ["PHP", "Python", "TypeScript", "R"],
    ];
    // Mutar
    $person["name"] = "Mario";
    $person["languages"][] = "Java";
?>





<?php if ($is_old) : ?>
    <h2> Eres Viejo, lo siento </h2>
<?php elseif ($age >= 18 and $age <= 40) : ?>  
    <h2> Eres un adulto chiquito </h2>
<?php else : ?>  
    <h2> Eres joven, congratulations </h2>
<?php endif; ?>




<ul>
    <?php foreach ($bestLanguage as $key => $language) : ?>
        <li>
            <?= "$key => $language"  ?>
        </li>
    <?php endforeach ; ?>

</ul>

<h2>
    <?= $output_age ?>
</h2>

<img src="<?= LOGO_URL ?>" alt="PHP Logo" width="100">
<h1>
    <?= 
        $output; 
    ?>
</h1>









<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>