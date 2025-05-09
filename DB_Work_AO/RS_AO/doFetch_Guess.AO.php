<?php
include_once __DIR__ . '/../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

$sql = "SELECT id, name, added_at FROM guests ORDER BY added_at DESC";
$result = $conn->query($sql);

$guests = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $guests[] = $row;
    }
}

$conn->close(); // Veritabanı bağlantısını kapatıyoruz.

// Davetli listesi verisini döndürüyoruz.
echo "<pre>";
print_r($guests);
echo "</pre>";
?>
