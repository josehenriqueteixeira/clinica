<?php

function listaProdutos($conexao) {
    $especialidades = array();
    $resultado = mysqli_query($conexao, "select * from especialidades");

    while($especia = mysqli_fetch_assoc($resultado)) {
        array_push($especialidades, $especia);
    }

    return $especialidades;
}
