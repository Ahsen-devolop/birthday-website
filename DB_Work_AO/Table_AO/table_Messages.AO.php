<?php
include_once __DIR__ . '/../../DB_Work_AO/RS_AO/resultSet_Messages.AO.php'; // Mesaj listesi verisini çekiyoruz.

echo "<table border='1' style='width:100%; text-align:center;'>";
echo "<thead>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Wiadomość</th>";
echo "<th>Dodane przez</th>";
echo "<th>Data Dodania</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

include __DIR__ . '/../../DB_Work_AO/RS_AO/resultSet_Messages.AO.php';

echo "</tbody>";
echo "</table>";
?>
