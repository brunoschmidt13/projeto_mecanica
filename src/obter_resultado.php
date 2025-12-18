<?php
session_start();
header('Content-Type: application/json');
if (isset($_SESSION['resultados'])) {
    echo json_encode($_SESSION['resultados']);
} else {
    echo json_encode([]);
}
?>