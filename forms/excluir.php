
<?php
$id=$_GET['id'];
$sql = "DELETE FROM produtos WHERE id='$id'";
if ($conn->query($sql) === TRUE) {
   // echo 'exluido com sucesso';
    echo '<script>window.history.go(-1)</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


