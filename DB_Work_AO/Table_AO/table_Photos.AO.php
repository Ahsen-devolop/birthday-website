<?php
include_once __DIR__ . '/../../DB_Work_AO/RS_AO/resultSet_Photos.AO.php'; // Fotoğraf listesi verisini çekiyoruz.

echo "<table border='1' style='width:100%; text-align:center;'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Nazwa Pliku</th>";
echo "<th>Data Wgrywania</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

include __DIR__ . '/../../DB_Work_AO/RS_AO/resultSet_Photos.AO.php';

echo "</tbody>";
echo "</table>";
?>
