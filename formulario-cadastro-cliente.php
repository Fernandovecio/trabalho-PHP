<?php 
    $notificacao = filter_input(INPUT_GET, 'notify', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Cadastro de Cliente</legend>
            <form action="registraCliente.php" method="post" class="form">
                <div class="mb-3 form-group">
                    <label for="nomeId" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe seu nome">
                    <div id="helperNome" class="form-text">Informe seu nome completo</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="pedidoId" class="form-label">Pedido</label>
                    <input type="pedido" name="pedido" id="pedidoId" class="form-control" placeholder="Informe o seu pedido">
                    <div id="helperpedido" class="form-text">Informe o pedido</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="mesaId" class="form-label">Mesa</label>
                    <input type="text" name="mesa" id="mesaId" class="form-control" placeholder="Informe sua mesa">
                    <div id="helperMesa" class="form-text">Informe sua Mesa</div>
                <div class="mb-3 form-group">
                    <label for="mesaId" class="form-label">Observação</label>
                    <input type="text" name="mesa" id="observacaoId" class="form-control" placeholder="Observação">
                    <div id="helperMesa" class="form-text">Observação</div>
                </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?=$notificacao?></div>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>