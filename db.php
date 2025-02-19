<?php

$clientes = [];

function adicionarCliente($cliente) {
    global $clientes;
    $id = count($clientes) + 1;
    $cliente['id'] = $id;
    $clientes[$id] = $cliente; // Adiciona o cliente ao array associativo usando o ID como chave
    return $id;
}

function listarClientes() {
    global $clientes;
    return array_values($clientes); // Retorna apenas os valores do array (dados dos clientes)
}

function buscarCliente($id) {
    global $clientes;
    return $clientes[$id] ?? null; // Utiliza o operador de coalescência nula para retornar null se o ID não existir
}

function atualizarCliente($id, $cliente) {
    global $clientes;
    if (isset($clientes[$id])) {
        $clientes[$id] = $cliente;
        return true;
    }
    return false;
}

function removerCliente($id) {
    global $clientes;
    if (isset($clientes[$id])) {
        unset($clientes[$id]);
        return true;
    }
    return false;
}

?>