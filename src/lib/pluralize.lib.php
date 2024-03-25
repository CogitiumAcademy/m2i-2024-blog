<?php

function pluralize($singular, $count) {
    if ($count !== 1) {
        // Ajoute 's' à la fin du mot pour le pluriel
        return $singular . 's';
    } else {
        // Retourne le mot singulier tel quel s'il y a un seul élément
        return $singular;
    }
}