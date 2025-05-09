<?php
include '../../DB_Include_AO/db.AO.php'; // Włączenie połączenia z bazą danych

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<p>Formularz przesłany!</p>";

    if (isset($_FILES['photo']['name']) && !empty($_FILES['photo']['name'])) {
        $target_dir = "../../Img_AO/";
        $target_file = $target_dir . basename($_FILES['photo']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Sprawdzenie, czy plik jest obrazem
        $check = getimagesize($_FILES['photo']['tmp_name']);
        if ($check !== false) {
            echo "<p>Plik jest obrazem: " . htmlspecialchars($check['mime']) . "</p>";
            $uploadOk = 1;
        } else {
            echo "<p>Plik nie jest obrazem.</p>";
            $uploadOk = 0;
        }

        // Sprawdzenie, czy plik już istnieje
        if (file_exists($target_file)) {
            echo "<p>Przepraszamy, plik już istnieje.</p>";
            $uploadOk = 0;
        }

        // Sprawdzenie rozmiaru pliku
        if ($_FILES['photo']['size'] > 500000) {
            echo "<p>Przepraszamy, plik jest za duży.</p>";
            $uploadOk = 0;
        }

        // Zezwalanie na określone formaty plików
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<p>Przepraszamy, akceptowane są tylko pliki JPG, JPEG, PNG i GIF.</p>";
            $uploadOk = 0;
        }

        // Jeśli wszystko jest w porządku, spróbuj przesłać plik
        if ($uploadOk == 0) {
            echo "<p>Przepraszamy, plik nie został przesłany.</p>";
        } else {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
                echo "<p>Plik " . htmlspecialchars(basename($_FILES['photo']['name'])) . " został przesłany.</p>";

                // Zapisz informację o zdjęciu do bazy danych
                $photo_name = htmlspecialchars(basename($_FILES['photo']['name']));
                $sql = "INSERT INTO photos (photo_name) VALUES (?)";
                $stmt = $conn->prepare($sql);

                if ($stmt) {
                    $stmt->bind_param("s", $photo_name);

                    if ($stmt->execute()) {
                        echo "<p>Zdjęcie zostało zapisane w bazie danych!</p>";
                    } else {
                        echo "<p>Błąd podczas zapisywania w bazie danych: " . htmlspecialchars($stmt->error) . "</p>";
                    }

                    $stmt->close();
                } else {
                    echo "<p>Błąd przygotowania zapytania SQL: " . htmlspecialchars($conn->error) . "</p>";
                }
            } else {
                echo "<p>Przepraszamy, wystąpił błąd podczas przesyłania pliku.</p>";
            }
        }
    } else {
        echo "<p>Proszę wybrać plik do przesłania.</p>";
    }
}

$conn->close();
?>
