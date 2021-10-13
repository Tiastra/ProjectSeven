<?php

namespace App\views\titulo;
require __DIR__.'/../../../vendor/autoload.php';

use App\controllers\ClienteController;
use App\controllers\TituloController;
use App\models\Cliente;

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

<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>

<body class="w3-light-grey">
<!-- Menu -->
<div class="w3-bar w3-large w3-red">
    <a href="../../../index.php" class="w3-bar-item w3-button w3-mobile"><i class=" w3-margin-right"></i>Home</a>
    <a href="../cliente/clienteAdmin.php" class="w3-bar-item w3-button w3-mobile">Cliente</a>
    <a href="tituloAdmin.php" class="w3-bar-item w3-button w3-mobile">Título</a>
</div>

<div class="w3-container w3-padding-32 w3-black w3-card">
    <h2>Cadastro de Título</h2>
    <p></p>
    <a href="tituloForm.php">
        <button type="button" class="w3-button w3-green w3-margin-top w3-large w3-border w3-border-red">Cadastrar Novo Título</button>
    </a>
</div>
<?php

$mensagem = '';
$titulos = array();
if(isset($_GET['status'])){
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="w3-container w3-green w3-padding-16 w3-margin-bottom w3-large">Novo Título cadastrado com sucesso!</div>';
            break;

        case 'error':
            $mensagem = '<div class="w3-container w3-red w3-padding-16  w3-large">Erro ao cadastrar Título!</div>';
            break;
    }
}
$tituloController = new TituloController();

$titulos = $tituloController->listarTodos();

$resultados = '';
foreach($titulos as $titulo){
    $resultados .= '<tr>
                      <td class="w3-border">'.$titulo->id_titulo.'</td>
                      <td class="w3-border">'.$titulo->id_cliente.'</td>
                      <td class="w3-border">'."R$ ".$titulo->valor_titulo.",00".'</td>
                      <td class="w3-border">'.date('d/m/Y',strtotime($titulo->data_vencimento)).'</td>
                      <td class="w3-border">
                        <a href="tituloFormEditar.php?id='.$titulo->id_titulo.'">
                          <button type="button" class="w3-button w3-green">Editar</button>
                        </a>
                        <a href="excluir.php?id='.$titulo->id_titulo.'">
                          <button type="button" class="w3-button w3-red">Excluir</button>
                        </a>
                      </td>
                    </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
                                                       <td colspan="6" class="text-center">
                                                              Nenhum registro encontrado!
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
                <th class="w3-border">Cliente</th>
                <th class="w3-border">Valor</th>
                <th class="w3-border">Data de Vencimento</th>
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
