<?php
include "conn.php";

$rm= $_GET["rm"];

mysqli_query($conn, "DELETE FROM aluno WHERE rm = '$rm'");

echo "$rm";