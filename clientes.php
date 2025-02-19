<?php

require_once 'db.php';

function criarCliente($data) {
    $cliente = [
        'nome' => $data['nome'],
        'email' => $data['email'],
        'telefone' => $data['telefone'],
        'cpf' => $data['cpf'],
        'cep' => $data['cep'],
        'endereco' => $data['endereco'],
        'agencia' => $data['agencia'],
        'conta' => $data['conta']
    ];
    return adicionarCliente($cliente);
}

function listarClientes() {
    return listarClientes();
}

function buscarCliente($id) {
    return buscarCliente($id);
}

function atualizarCliente($id, $data) {
    $cliente = [
        'nome' => $data['nome'],
        'email' => $data['email'],
        'telefone' => $data['telefone'],
        'cpf' => $data['cpf'],
        'cep' => $data['cep'],
        'endereco' => $data['endereco'],
        'agencia' => $data['agencia'],
        'conta' => $data['conta']
    ];
    return atualizarCliente($id, $cliente);
}

function removerCliente($id) {
    return removerCliente($id);
}

?>