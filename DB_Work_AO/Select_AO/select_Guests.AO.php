<?php
include_once __DIR__ . '/../../DB_Include_AO/db.AO.php'; // Veritabanı bağlantısını dahil ediyoruz.

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM guests WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $guest = $result->fetch_assoc();

        echo "ID: " . htmlspecialchars($guest['id']) . "<br>";
        echo "Imię: " . htmlspecialchars($guest['name']) . "<br>";
        echo "Data Dodania: " . htmlspecialchars($guest['added_at']) . "<br>";

        $stmt->close();
    } else {
        echo "Błąd zapytania SQL: " . htmlspecialchars($conn->error);
    }
} else {
    echo "Nie podano ID!";
}

$conn->close(); // Veritabanı bağlantısını kapatıyoruz.
?>
