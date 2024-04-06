<?php
$name = "José";
$idDev = true;
$age = 10;

$output = "Hola $name , con una edad de $age 🙃";
$outputAge = match (true) {
    $age < 2 => "Eres un Bebé, $name 👶",
    $age < 10 => "Eres un niño, $name 👦",
    $age < 18 => "Eres un adolescente, $name 👨",
    $age === 18 => "Eres mayor de edad, $name 🍺",
    $age < 40 => "Eres un adulto joven, $name 👨‍🦰",
    $age < 60 => "Eres un adulto viejo, $name 👶",
    default => "Hueles más a madera que a fruta, $name 🤶",
};

$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
    "name" => "José",
    "age" => 24,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Python"],
];

$person["name"]
?>

<h2><?= $outputAge ?></h2>
<!-- <h3>El mejor lenguaje es <?= $bestLanguages ?></h3> -->
<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach ?>
</ul>
<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>