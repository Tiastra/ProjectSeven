<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
</head>

<body class="w3-light-grey">

<div class="w3-container" id="contact">
    <div class="w3-red">
        <h2>Cadastro de Cliente</h2>
    </div>
    <form action="cadastrar.php" method="post">
        <h4>Dados do Cliente</h4>
        <p>
            <label>Nome
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Nome" required name="nome_cliente">
            </label>
        </p>
        <p>
            <label>Documento
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CPF ou CNPJ (somente números)" required name="documento_cliente">
            </label>
        </p>
        <p>
            <label>Data de Nascimento
                <input class="w3-input w3-padding-16 w3-border" type="date" placeholder="Data de Nascimento" required name="data_nascimento">
            </label>
        </p>
        <p>
            <label>e-mail
                <input class="w3-input w3-padding-16 w3-border" type="email" placeholder="e-mail" required name="email_cliente">
            </label>
        </p>
        <p>
            <label>CEP
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Telefone" name="telefone_cliente">
            </label>
        </p>
        <hr>
        <h4>Dados do Cliente - Endereço</h4>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CEP (somente números)" name="cep">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Logradouro" required name="logradouro">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="number" placeholder="Número" required name="numero">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Complemento" name="complemento">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Bairro" required name="bairro">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Cidade" required name="cidade">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Estado" required name="estado">
            </label>
        </p>
        <p>
            <label>
                <input class="w3-input w3-padding-16 w3-border" type="text" placeholder="País" required name="pais">
            </label>
        </p>
        <p>
            <button class="w3-button w3-green w3-padding-large" id="btn-enviar" type="submit" >Salvar</button>
            <a href="clienteAdmin.php"><button class="w3-button w3-red w3-padding-large" type="button">Voltar</button></a>
        </p>
    </form>
</div>

<footer class="w3-padding-32 w3-black w3-center">
    <div class="w3-xlarge w3-padding-16">
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://github.com/Tiastra" target="_blank" class="w3-hover-text-green">Tiago Oliveira</a></p>
</footer>

</body>
</html>
