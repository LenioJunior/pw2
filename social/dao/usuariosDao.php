<?php
function getUsuarios($connection) {
    $query = "SELECT * FROM usuarios";
    return mysqli_query($connection, $query);
}

function getUsuarioByUsername($conexao, $username) {
    $query = "SELECT * FROM usuarios WHERE nome = ?";
    $stmt = mysqli_prepare($conexao, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $resultado;
}
?>
