<?php

use App\Autoload;
use App\Models\ArticlesModel;
use App\Models\UsersModel;

require_once 'Autoload.php';
Autoload::register();

$articles = new ArticlesModel();
$reqA = $articles->findAll();

$user = new UsersModel();
$reqU = $user->findAll();
var_dump($reqA);
var_dump($reqU);