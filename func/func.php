<?php
function connect(){
    return mysqli_connect("localhost", "root", "", "test_db");
}
function queryAll($sql){
    $query = mysqli_query(connect(),$sql);
    $result = [];
    while($row = mysqli_fetch_assoc($query)){
        $result[] = $row;
    }
    return $result;
}