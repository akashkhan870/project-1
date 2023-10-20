<?php

include_once 'db_config.php';

$sql_select_query = "SELECT * FROM `cv`";

$result = mysqli_query($conn, $sql_select_query);

?>