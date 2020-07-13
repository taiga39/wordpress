<?php
header("Access-Control-Allow-Origin: http://localhost:8080");
header("content-type: application/json");
echo file_get_contents("obm.json");
?>