<?php

$prenom = trim(strip_tags($_POST['username']));

if (!isset($_POST['username'])) {
    header("Location: index.php?error=1");
    echo "Une erreur c'est produite lors du traitement de vos données";
} else {
    echo "Les données ont bien été envoyés <br>";
    echo "Prénom : $prenom <br>";
}

if ($prenom === "james") {
    echo "Bond, James Bond";
} else {
    echo "Bonjour $prenom";
}
