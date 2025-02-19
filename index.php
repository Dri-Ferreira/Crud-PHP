<?php

require_once 'clientes.php';

// Define as rotas da API
$rotas = [
    '/clientes' => [
        'GET' => 'listarClientes',
        'POST' => 'criarCliente'
    ],
    '/clientes/{id}' => [
        'GET' => 'buscarCliente',
        'PUT' => 'atualizarCliente',
        'DELETE' => 'removerCliente'
    ]
];

// Obtém a rota e o método da requisição
$rota = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$metodo = $_SERVER['REQUEST_METHOD'];

// Verifica se a rota existe
if (isset($rotas[$rota][$metodo])) {
    $funcao = $rotas[$rota][$metodo];

    // Obtém os dados da requisição (se houver)
    $dados = [];
    if ($metodo === 'POST' || $metodo === 'PUT') {
        $dados = json_decode(file_get_contents('php://input'), true);
    }

    // Chama a função da API
    $resultado = $funcao($dados);

    // Envia a resposta em formato JSON
    header('Content-Type: application/json');
    echo json_encode($resultado);
} else {
    // Rota não encontrada
    http_response_code(404);
    echo json_encode(['mensagem' => 'Rota não encontrada']);
}

?>