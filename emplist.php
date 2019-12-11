<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    </header>
    <body>
    Emp List
    <a href="newemp.html">+</a>
    <?php
    // connect database 
    $db_host = "localhost";
    $db_user = "s59160841";
    $db_password = "niveaso841.";
    $db_name = "s59160841";

    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    // check connection error 
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
        // connect success, do nothing
    }

    // select data from tables
    $limit = ($_GET['limit']<>"")? $_GET['limit'] : 10;
    $sql = "SELECT *
            FROM emp_1
            ORDER BY 1 DESC
            LIMIT 0, $limit";
    $result = $mysqli->query($sql);

    if (!result) {
            echo ("Error: ". $mysqli->error);
    } else {
        while($row = $result->fetch_object()){ 
                echo "<div>";
                echo "$row->emp_no, $row->emp_name, $row->emp_email";
                echo "</div>";
            } 
    }
    ?>
    </body>
    </html>