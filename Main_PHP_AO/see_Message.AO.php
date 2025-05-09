<?php
include '../DB_Work_AO/RS_AO/resultSet_Messages.AO.php';
?>
<h1>Lista Wiadomości</h1>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Wiadomość</th>
            <th>Dodane przez</th>
            <th>Data Dodania</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($messages as $message): ?>
            <tr>
                <td><?= htmlspecialchars($message['id']); ?></td>
                <td><?= htmlspecialchars($message['message']); ?></td>
                <td><?= htmlspecialchars($message['added_by']); ?></td>
                <td><?= htmlspecialchars($message['added_at']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
