<?php
include __DIR__ . '/../Main_Include_AO/header_AO.php';
include __DIR__ . '/../Main_Include_AO/nav_AO.php';
?>

<div style="padding: 20px;">
    <h2>Galeria Zdjęć</h2>
    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 10px;">
        <?php
        $images = ['foto1.jpg', 'foto2.jpg', 'foto3.jpg', 'foto4.jpg', 'foto5.jpg'];
        foreach ($images as $image) {
            echo "<div style='border: 1px solid #ddd; padding: 10px;'>
                    <img src='../Img_AO/$image' alt='$image' style='width: 200px;'>
                  </div>";
        }
        ?>
    </div>
</div>

<?php
include __DIR__ . '/../Main_Include_AO/footer_AO.php';
?>
