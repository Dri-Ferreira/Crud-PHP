<?php

require_once 'clientes.php';

// Define as rotas da API
$rotas = [
    '/crud-PHP/index.php/clientes/criarCliente' => [
        'GET' => 'listarClientes',
        'POST' => 'criarCliente'
    ],
    '/clientes/{id}' => [
        'GET' => 'buscarCliente',
        'PUT' => 'atualizarCliente',
        'DELETE' => 'removerCliente'
    ]
];


$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];

if (isset($rotas[$rota][$metodo])) {
    $funcao = $rotas[$rota][$metodo];

    $dados = [];
    if ($metodo === 'POST' || $metodo === 'PUT') {
        $dados = json_decode(file_get_contents('php://input'), true);
    }

    $resultado = $funcao($dados);

    header('Content-Type: application/json');
    echo json_encode($resultado);
} else {
    http_response_code(404);
    echo json_encode(['mensagem' => 'Rota não encontrada']);
}

?>
