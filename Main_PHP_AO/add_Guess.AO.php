<?php
include __DIR__ . '/../Main_Include_AO/header_AO.php';
include __DIR__ . '/../Main_Include_AO/nav_AO.php';
?>

<div style="padding: 20px; text-align: center;">
    <h2>Dodaj Nowego Gościa</h2>
    <form action="../DB_Work_AO/Add_AO/doAdd_Guess.AO.php" method="POST">
        <label for="name">Imię i Nazwisko:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">Dodaj Gościa</button>
    </form>
</div>

<?php
include __DIR__ . '/../Main_Include_AO/footer_AO.php';
?>
