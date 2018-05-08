<?php

include '../db.php';

$sql = "INSERT INTO groups (`status`) VALUES ('1')";

if($conn->query($sql) === TRUE) {
    header('Location: ..\registrar\sucesso\registrarsucesso.html');
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

    header('Location: ../index.php#!/groups', 2);
?>
