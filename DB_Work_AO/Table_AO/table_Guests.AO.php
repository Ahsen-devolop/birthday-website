<?php
include_once __DIR__ . '/../../DB_Work_AO/RS_AO/resultSet_Guests.AO.php'; // Davetli listesi verisini çekiyoruz.

echo "<table border='1' style='width:100%; text-align:center;'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Imię</th>";
echo "<th>Data Dodania</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

include __DIR__ . '/../../DB_Work_AO/RS_AO/resultSet_Guests.AO.php';

echo "</tbody>";
echo "</table>";
?>

