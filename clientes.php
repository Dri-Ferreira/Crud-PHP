<?php

$clientes = [];


function criarCliente($dados) {
    global $clientes;
    $id = count($clientes) + 1;
    $cliente = [
        'id' => $id,
        'nome' => $dados['nome'],
        'email' => $dados['email'],
        'telefone' => $dados['telefone']
    ];
    $clientes[$id] = $cliente;
    return $cliente;
}


?>