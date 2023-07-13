<html>
    <head>
        <title>Test MySQL connection</title>
    </head>
    <body>
        <?php
            $dbhost = 'mysql';
            $dbuser = 'myuser';
            $dbpass = 'mypassword';
            $mysqli = new mysqli($dbhost, $dbuser, $dbpass);

            if($mysqli->connect_errno){
                printf("Connection failed: $s<br />",$mysqli->connect_error);
            } else {
                printf("Connection succeeded!<br />");
            }
        ?>
    </body>
</html>