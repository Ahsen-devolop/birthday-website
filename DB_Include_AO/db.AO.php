<?php
$servername = "localhost"; // Sunucu adı
$username = "root"; // Kullanıcı adı (varsayılan genelde 'root')
$password = ""; // Şifre (XAMPP'te genelde boş bırakılır)
$dbname = "ahsen_ozturk_65685"; // Veritabanı adı

// Veritabanı bağlantısını oluştur
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Veritabanı bağlantı hatası: " . $conn->connect_error);
}
?>
