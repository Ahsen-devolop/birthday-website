<?php
// Görsellerin bulunduğu klasör
$image_directory = __DIR__ . '/../Img_AO/';

// Geçerli dosya türleri
$allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];

// Klasördeki tüm dosyaları listeleme
$images = array_diff(scandir($image_directory), array('..', '.'));

// Filtreleme: Sadece resim dosyalarını seçme
$images = array_filter($images, function ($file) use ($image_directory, $allowed_extensions) {
    $file_extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    return in_array($file_extension, $allowed_extensions);
});

// HTML Görsel Galerisi
echo '<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px;">';

foreach ($images as $image) {
    echo "<div style='border: 1px solid #ddd; padding: 10px;'>";
    echo "<img src='../Img_AO/$image' alt='$image' style='width: 200px;'>";
    echo "</div>";
}

echo '</div>';
?>
