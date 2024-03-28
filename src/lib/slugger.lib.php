<?php

// by ChatGPT

function slug($string) {
    // Convertir la chaîne en minuscules
    $string = strtolower($string);
    
    // Supprimer les caractères spéciaux et les accents
    $string = preg_replace('/[^a-z0-9]+/', '-', $string);
    
    // Supprimer les tirets en début et fin de chaîne
    $string = trim($string, '-');
    
    return $string;
}