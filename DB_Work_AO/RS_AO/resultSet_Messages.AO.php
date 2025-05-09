<?php
// Veritabanı bağlantısını dahil ediyoruz
include __DIR__ . '/../../DB_Include_AO/db.AO.php';

// Sorguyu tanımlıyoruz
$sql = "SELECT * FROM messages";

// Sorguyu çalıştırıyoruz
$result = $conn->query($sql);

// Hata kontrolü
if (!$result) {
    die("Sorgu hatası: " . $conn->error); // Hata varsa bunu yazdırır ve işlemi durdurur
}

// Verileri çekiyoruz
if ($result->num_rows > 0) {
    $messages = $result->fetch_all(MYSQLI_ASSOC); // Tüm sonuçları bir dizi olarak alır
} else {
    $messages = []; // Eğer veri yoksa boş bir dizi döner
}

// Bellek temizliği
$result->free_result();

// Veritabanı bağlantısını kapatıyoruz
$conn->close();
?>
