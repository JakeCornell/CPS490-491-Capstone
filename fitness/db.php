<?php
//phpinfo();
    //db.php
    //global $db_connection;
    $db_location = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "gitfit";

    $db_connection = mysqli_connect('localhost', 'root', '', 'gitfit');
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
        
?>
