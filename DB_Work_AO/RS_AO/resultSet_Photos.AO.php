<?php
include_once __DIR__ . '/../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

$sql = "SELECT id, photo_name, uploaded_at FROM photos ORDER BY uploaded_at DESC";
$result = $conn->query($sql);

$photos = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $photos[] = $row;
    }
}

$conn->close(); // Veritabanı bağlantısını kapatıyoruz.

// Fotoğraf listesi verisini döndürüyoruz.
echo "<pre>";
print_r($photos);
echo "</pre>";
?>
