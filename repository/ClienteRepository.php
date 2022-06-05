<?php

    require_once('Connectionrest.php');

    # CRUD

    function fnAddCliente($nome, $pedido, $mesa, $observacao) {
        $con = getConnection();
        
                $sql = "insert into cliente (nome, pedido, mesa, observacao) values (:pNome, :pPedido, :pMesa, :pObservacao)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(":pNome", $nome); 
        $stmt->bindParam(":pPedido", $pedido); 
        $stmt->bindParam(":pMesa", $mesa);
        $stmt->bindParam(":pObservacao", $observacao);

        
        return $stmt->execute();
    }

    fnAddCliente('Fernando', 'pizza portuguesa', 15, 'não colocar azeitona e atum');