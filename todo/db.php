<?php
define("DB_SERVER", "127.0.0.1");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "mysqlpassword");
define("DB_DATABASE", "todo");


function todo_connect(){
    return mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
}

function fetch_as_array($rs){
    return mysqli_fetch_all($rs, MYSQLI_ASSOC);
}        

function select_query($query, $fn = "fetch_as_array"){
    $conn = todo_connect();
    $rs = mysqli_query($conn, $query);
    $result = call_user_func($fn, $rs);
    mysqli_close($conn);
    return $result;
}

function todo_list(){
    return select_query("select subject, note from notes");
}

?>
        
