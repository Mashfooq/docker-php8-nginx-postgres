<?php 
    $conn = pg_connect("host=service-postgres dbname=mydatabase user=myuser password=mypassword");
    // check if the connection is established
    if (pg_connection_status($conn) === PGSQL_CONNECTION_OK) {
        echo "Connection established successfully";
    } else {
        echo "Connection failed";
    }
?>