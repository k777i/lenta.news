<?php
//подключение к базе данных
function connect(){
    return mysqli_connect("localhost", "root", "", "test_db");
}
//запрос всех новостей
function queryAllNews()
{
    $sql = "SELECT * FROM articles ORDER BY pabdate DESC ";
    $query = mysqli_query(connect(), $sql);
    $result = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $result[] = $row;
    }
    return $result;
}

//запрос одной новости
function queryOneNews($id)
{
    $sql = "SELECT text FROM articles WHERE id=" . $id;
    $query = mysqli_query(connect(), $sql);
    return mysqli_fetch_assoc($query);
}

function addNews($author, $text){
    $sql = "INSERT INTO articles (author, text)
            VALUES ('$author', '$text')";
    mysqli_query(connect(),$sql);
}