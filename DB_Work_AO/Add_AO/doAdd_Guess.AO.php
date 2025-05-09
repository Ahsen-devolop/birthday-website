<?php
include '../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = trim($_POST['name']); // Veriyi temizliyoruz.

        // SQL Sorgusu
        $sql = "INSERT INTO guests (name) VALUES (?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $name);

            if ($stmt->execute()) {
                echo "<p>Gość został pomyślnie dodany!</p>"; // Başarılı mesaj
            } else {
                echo "<p>Wystąpił błąd podczas dodawania: " . htmlspecialchars($stmt->error) . "</p>"; // Hata mesajı
            }

            $stmt->close();
        } else {
            echo "<p>SQL przygotowanie nie powiodło się: " . htmlspecialchars($conn->error) . "</p>"; // SQL hatası
        }
    } else {
        echo "<p>Proszę wpisać imię.</p>"; // Uyarı mesajı
    }
}

$conn->close(); // Veritabanı bağlantısını kapatıyoruz.
?>
