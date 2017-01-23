<?php
include __DIR__.'/../models/newsModels.php';

if(!$_GET['id']){
    $allNews = queryAllNews();
    include __DIR__ . "/../views/index.php";
    exit;
}
if($_GET['id']){
    $oneNews = queryOneNews($_GET['id']);
    include __DIR__.'/../views/viewonenews.php';
    exit;
}