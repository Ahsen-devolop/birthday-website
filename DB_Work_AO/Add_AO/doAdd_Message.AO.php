<?php
include '../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['message']) && isset($_POST['added_by']) && !empty($_POST['message']) && !empty($_POST['added_by'])) {
        $message = trim($_POST['message']);
        $added_by = trim($_POST['added_by']);

        // SQL sorgusunu hazırla
        $sql = "INSERT INTO messages (message, added_by) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ss", $message, $added_by);

            if ($stmt->execute()) {
                echo "<p>Wiadomość została pomyślnie dodana!</p>";
            } else {
                echo "<p>Wystąpił błąd: " . htmlspecialchars($stmt->error) . "</p>";
            }

            $stmt->close();
        } else {
            echo "<p>Wystąpił błąd podczas przygotowania zapytania SQL: " . htmlspecialchars($conn->error) . "</p>";
        }
    } else {
        echo "<p>Proszę wypełnić wszystkie pola.</p>";
    }
}

$conn->close();
?>
