<?php
include '../DB_Work_AO/RS_AO/resultSet_Guests.AO.php'; // Guest listesi alınıyor.

// Header dahil ediliyor
include '../Main_Include_AO/header_AO.php';
// Navigasyon menüsü
include '../Main_Include_AO/nav_AO.php';

echo "<h2>Lista Gości</h2>";

if (!empty($guests)) {
    echo "<table border='1' style='width:100%; text-align:center;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Imię</th>";
    echo "<th>Data Dodania</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    foreach ($guests as $guest) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($guest['id']) . "</td>";
        echo "<td>" . htmlspecialchars($guest['name']) . "</td>";
        echo "<td>" . htmlspecialchars($guest['added_at']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Brak gości w bazie danych.</p>";
}

// Footer dahil ediliyor
include '../Main_Include_AO/footer_AO.php';
?>
