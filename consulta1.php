<?php
$stmt = $pdo->query("SELECT * FROM usuarios");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
     echo $row['nome']. "<br>";
}
?> 