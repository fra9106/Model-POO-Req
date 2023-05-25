<?php

use App\Autoload;
use App\Models\ArticlesModel;

require_once 'Autoload.php';
Autoload::register();

$articles = new ArticlesModel();
$req = $articles->findAll();

var_dump($req);