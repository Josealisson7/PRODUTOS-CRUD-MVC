<?php include_once "../template/head.php" ?>
<?php include_once "../template/menu.php" ?>
    <article class="principal-conteudo">
        <br>
        <div class="container">
            <form method="post" action="../../index.php?route=produto/atualizar">
                <h1 class="titulo-cadastro">Alterar</h1>
                <br>
                <input type="hidden" name="id" value="<?=$_SESSION["produto"]['id']?>">
                <div class="form-group">
                    <label for="nome_cad">Nome do Produto</label>
                    <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Produto" class="form-control" value='<?= isset($_SESSION["produto"])?$_SESSION["produto"]['nome_cad']:""?>'/>
                </div>
                <div class="form-group">
                    <label for="preco_cad">Preço</label>
                    <input id="preco_cad" name="preco_cad" required="required" type="text" placeholder="Preco" class="form-control" value='<?= isset($_SESSION["produto"])?$_SESSION["produto"]['preco_cad']:""?>'/>
                </div>
                <div class="form-group">
                    <label for="quantidade_cad">Quantidade</label>
                    <input id="quantidade_cad" name="quantidade_cad" required="required" type="number" placeholder="Quantidade" class="form-control" value='<?= isset($_SESSION["produto"])?$_SESSION["produto"]['quantidade_cad']:""?>'/>
                </div>
                <p>
                    <input type="submit" value="Alterar" class="btn btn-primary"/>
                </p>
            </form>
        </div>
    </article>

<?php include_once "../template/footer.php" ?>