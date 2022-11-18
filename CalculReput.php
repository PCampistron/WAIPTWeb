<?php

    enum Criteres{
        case nbDefi;
        case nbUtilisateurs;
        case dateSortie;
    }

    $requete = array_map('mine', [Criteres::nbDefi, Criteres::dateSortie]);

?>