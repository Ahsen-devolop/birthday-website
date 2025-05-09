<?php
include_once __DIR__ . '/../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM messages WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $message = $result->fetch_assoc();

        echo "ID: " . htmlspecialchars($message['id']) . "<br>";
        echo "Wiadomość: " . htmlspecialchars($message['message']) . "<br>";
        echo "Dodane przez: " . htmlspecialchars($message['added_by']) . "<br>";
        echo "Data Dodania: " . htmlspecialchars($message['added_at']) . "<br>";

        $stmt->close();
    } else {
        echo "Błąd zapytania SQL: " . htmlspecialchars($conn->error);
    }
} else {
    echo "Nie podano ID!";
}

$conn->close(); // Veritabanı bağlantısını kapatıyoruz.
?>
