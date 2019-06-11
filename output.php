<?php
require_once("functions.php");
$evaluate = new Evaluation();

$firstname = filter_input(INPUT_POST, "firstname");
$surname = filter_input(INPUT_POST, "surname");
$gender = filter_input(INPUT_POST, "gender");
$age = filter_input(INPUT_POST, "age");
$job = filter_input(INPUT_POST, "job");

var_dump($firstname, $surname, $gender, $age, $job);

$evaluation = $evaluate->isWorkable($age, $gender, $job);


#region Ověřování a formátování
if ($job == "digger") {
    $fancyJobOutput = "kopáč";
} elseif ($job == "itGuy") {
    if ($gender == "male") {
        $fancyJobOutput = "IT specialista";
    } elseif ($gender == "female") {
        $fancyJobOutput = "IT specialistka";
    }
} elseif ($job == "janitor") {
    $fancyJobOutput = "uklízečka";
}


if (!$evaluation && (empty($gender) || empty($age) || empty($job))) {
    $result = "Nevyplnil jsi potřebné informace!";
}
elseif (!$evaluation) {
    if (empty($firstname) && empty($lastname)) {
        $result = sprintf("Pro tebe není povolání %s vhodné.", $fancyJobOutput);
    }
    elseif (empty($firstname)) {
        $result = sprintf("Pro %s je povolání %s vhodné.", $firstname, $fancyJobOutput);
    }
    elseif (empty($surname)) {
        $result = sprintf("Pro %s je povolání %s vhodné.", $surname, $fancyJobOutput);
    }
    $result = sprintf("Pro %s %s není povolání %s vhodné.", $firstname, $surname, $fancyJobOutput);
}
elseif ($evaluation) {
    if (empty($firstname) && empty($lastname)) {
        $result = sprintf("Pro tebe je povolání %s vhodné.", $fancyJobOutput);
    }
    elseif (empty($firstname)) {
        $result = sprintf("Pro %s je povolání %s vhodné.", $firstname, $fancyJobOutput);
    }
    elseif (empty($surname)) {
        $result = sprintf("Pro %s je povolání %s vhodné.", $surname, $fancyJobOutput);
    }
    $result = sprintf("Pro %s %s je povolání %s vhodné.", $firstname, $surname, $fancyJobOutput);
}

#endregion

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Výsledek</title>
</head>
<body>
    <h1><?= $result ?><h1/>
</body>
</html>
