<?php

namespace App\views\cliente;
require __DIR__.'/../../../vendor/autoload.php';
use App\controllers\ClienteController;

?>

<!DOCTYPE html>
<html>

<title>Project Seven</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/W3.css">
<link rel="stylesheet" href="../../css/footer.css">

<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>

<body class="w3-light-grey">
<!-- Menu -->
<div class="w3-bar w3-large w3-red">
    <a href="../../../index.php" class="w3-bar-item w3-button w3-mobile"><i class=" w3-margin-right"></i>Home</a>
    <a href="clienteAdmin.php" class="w3-bar-item w3-button w3-mobile">Cliente</a>
    <a href="../titulo/tituloAdmin.php" class="w3-bar-item w3-button w3-mobile">Título</a>
</div>

<div class="w3-container w3-padding-32 w3-black w3-card">
    <h2>Cadastro de Cliente</h2>
    <p></p>
    <a href="clienteForm.php">
    <button type="button" class="w3-button w3-green w3-margin-top w3-large w3-border w3-border-red">Cadastrar Novo Cliente</button>
    </a>
</div>
<?php

$mensagem = '';
$clientes = array();
if(isset($_GET['status'])){
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="w3-container w3-green w3-padding-16 w3-margin-bottom w3-large">Novo Cliente cadastrado com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class="w3-container w3-red w3-padding-16  w3-large">Erro ao cadastrar Cliente!</div>';
            break;
    }
}
$clienteController = new ClienteController();

$clientes = $clienteController->listarTodos();

$resultados = '';
foreach($clientes as $cliente){
    $resultados .= '<tr>
                      <td class="w3-border">'.$cliente->id_cliente.'</td>
                      <td class="w3-border">'.$cliente->nome_cliente.'</td>
                      <td class="w3-border">'.$cliente->documento_cliente.'</td>
                      <td class="w3-border">'.date('d/m/Y',strtotime($cliente->data_nascimento)).'</td>
                      <td class="w3-border">'."Não".'</td>
                      <td class="w3-border">
                        <a href="clienteFormEditar.php?id='.$cliente->id_cliente.'">
                          <button type="button" class="w3-button w3-green">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$cliente->id_cliente.'">
                          <button type="button" class="w3-button w3-red">Excluir</button>
                        </a>
                      </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhuma vaga encontrada
                                                       </td>
                                                    </tr>';

?>

<main class="w3-container w3-black">

    <?=$mensagem?>

    <section>

        <table class="w3-table w3-dark-gray w3-border">
            <thead>
            <tr>
                <th class="w3-border">ID</th>
                <th class="w3-border">Nome</th>
                <th class="w3-border">Documento</th>
                <th class="w3-border">Data de Nascimento</th>
                <th class="w3-border">Dívida em atraso?</th>
<!--                <th>Endereço</th>-->
            </tr>
            </thead>
            <tbody>
            <?=$resultados?>
            </tbody>
        </table>

    </section>


</main>

<footer class="w3-padding-32 w3-black w3-center">
    <div class="w3-xlarge w3-padding-16">
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <a href="https://www.linkedin.com/in/carlos-tiago-oliveira-03a5a0182/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    </div>
    <p>Powered by <a href="https://github.com/Tiastra" target="_blank" class="w3-hover-text-green">Tiago Oliveira</a></p>
</footer>

</body>
</html>
