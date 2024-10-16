<?php

namespace App\Controllers;

use App\Utils\AbstractController;
use App\Models\Pokemon;

class HomeController extends AbstractController
{
    public function index()
    {
        $pokemon = new Pokemon(null, null, null, null, null);
        $allPokemon = $pokemon->getAll();
        
        require_once(__DIR__ . '/../Views/home.view.php');
    }

}
