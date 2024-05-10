<?php
require_once 'dbConnection.php';

$id = $_GET['id'];

// Check if the id is set and is a positive integer
if (isset($id) && is_numeric($id) && $id > 0) {
    $sql = "DELETE FROM Produit WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: ". $conn->error;
    }
} else {
    echo "Invalid id";
}

$conn->close();

// Redirect to index.php
header('Location: dashboard.php');
exit;
?>