<?php
function connect(){
    $config = file_get_contents("app_setting.json"); //string
    $config = json_decode($config);

    $host = $config->host;
    $user =$config->user;
    $pass = $config->password;
    $db = $config->database;
    $conn = new mysqli($host, $user, $pass, $db);
    if($conn ->error){
        die("connect refused!");
    }
    return $conn;
}

function select($sql){
    $conn = connect();
    $result = $conn -> query($sql);
    $data = [];
    while ($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    return $data;
}

function findById($sql){
    $data = select($sql); // [] : 1 hoac 0 elements
    if(count($data) > 0){
        return $data[0];
    }
    return null;
}