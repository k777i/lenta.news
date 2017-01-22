<?php
include __DIR__.'/../models/newsModels.php';
$allNews = queryAllNews();
include __DIR__ . "/../views/index.php";
$oneNews = queryOneNews($_GET['id']);
include __DIR__.'/../views/viewonenews.php';
