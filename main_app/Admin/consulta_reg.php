<?php
include ("conexion.php");   
//connect with the database
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $db->query("SELECT * FROM regimenes WHERE regimen LIKE '%".$searchTerm."%' ORDER BY regimen ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['regimen'];
}
//return json data
echo json_encode($data);
?>