<?php
include __DIR__ . '/../Main_Include_AO/header_AO.php';
include __DIR__ . '/../Main_Include_AO/nav_AO.php';
?>

<div style="padding: 20px; text-align: center;">
    <h2>Dodaj Wiadomość</h2>
    <form action="../DB_Work_AO/Add_AO/doAdd_Message.AO.php" method="POST">
        <label for="message">Wiadomość:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        <label for="added_by">Dodane przez:</label><br>
        <input type="text" id="added_by" name="added_by" required><br><br>
        <button type="submit" style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer;">Dodaj Wiadomość</button>
    </form>
</div>

<?php
include __DIR__ . '/../Main_Include_AO/footer_AO.php';
?>
