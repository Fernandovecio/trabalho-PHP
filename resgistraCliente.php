<?php

    require_once('repository/ ClienteRepository.php');

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $pedido = filter_input(INPUT_POST, 'pedido', FILTER_SANITIZE_SPECIAL_CHARS);
    $mesa = filter_input(INPUT_POST, 'mesa', FILTER_SANITIZE_NUMBER_INT);
    $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $msg = "";
    if(fnAddCliente($nome, $pedido, $mesa, $observacao)) {
        $msg = "Sucesso ao realizar pedido.";
    } else {
        $msg = "Falha no pedido.";
    }

        header("location: formulario-cadastro-cliente.php?notify={$msg}");
    exit;