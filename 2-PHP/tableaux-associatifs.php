<?php

// 1. Affectez un tableau associatif de trois valeurs de type nombre à virgule flottante avec des clés alpanumériques à une variable

// 2. Affectez un tableau associatif de trois valeurs de type chaîne de caractères avec des clés alpanumériques à une variable

// 3. Parcourir le premier tableau et afficher uniquement la valeur.

// 4. Parcourir le premier tableau et afficher le clé et la valeur.

$tabDecimal = array ("a" => 1.22, "b" => 4.11, "c" => 7.19);
$tabString = array ("a"=> "abc", "b"=> "def", "c" => "ghi");

echo $tabDecimal["a"]." ".$tabDecimal["b"]." ".$tabDecimal["c"];