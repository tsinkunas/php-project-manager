<?php
$id = $_GET['id'];
require_once './connect.php';
// sql to delete a record
$sql = "DELETE FROM sprint2.projects WHERE sprint2.projects.id = $id"; 
if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);
    header('Location: ../../');
    exit;
} else {
    echo "Error deleting record";
}
?>