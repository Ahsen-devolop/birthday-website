<?php
include_once __DIR__ . '/../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

$sql = "SELECT id, message, added_by, added_at FROM messages ORDER BY added_at DESC";
$result = $conn->query($sql);

$messages = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

$conn->close(); // Veritabanı bağlantısını kapatıyoruz.

// Mesaj listesi verisini döndürüyoruz.
echo "<pre>";
print_r($messages);
echo "</pre>";
?>
