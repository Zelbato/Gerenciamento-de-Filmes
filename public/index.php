<?php

require "../bootstrap.php"; // Certifique-se de que este arquivo é necessário e está correto.
// require_once __DIR__ . '/../vendor/autoload.php'; // Corrigido o caminho do autoload.



require_once __DIR__ . '/vendor/autoload.php';

// print_r(get_declared_classes());


use app\classes\Uri;
use core\Controller;

// Verifica e utiliza a classe Uri
// if (class_exists(Uri::class)) {
//     echo "Classe Uri carregada com sucesso!<br>";
//     echo "URI atual: " . Uri::getUri() . "<br>";
// } else {
//     echo "Erro: Classe Uri não foi encontrada.<br>";
//     exit;
// }

// Verifica e utiliza a classe Controller
// if (class_exists(Controller::class)) {
//     echo "Classe Controller carregada com sucesso!<br>";
//     $controller = new Controller();
//     if (method_exists($controller, 'getController')) {
//         echo $controller->getController();
//     } else {
//         echo "Erro: Método getController não foi encontrado na classe Controller.<br>";
//     }
// } else {
//     echo "Erro: Classe Controller não foi encontrada.<br>";
//     exit;
// }


$config = require __DIR__ . '../../config.php';

// Acessando uma configuração
// echo "Ambiente: " . $config['environment'] . "<br>";
// echo "Nome da aplicação: " . $config['app']['name'] . "<br>";

// Conexão com banco de dados (exemplo)
$dbConfig = $config['database'];
$dsn = "{$dbConfig['driver']}:host={$dbConfig['host']};dbname={$dbConfig['database']};charset={$dbConfig['charset']}";
try {
    $pdo = new PDO($dsn, $dbConfig['username'], $dbConfig['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com banco de dados bem-sucedida!";
} catch (PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}


$views = require '../app/views/home/index.php';

?>