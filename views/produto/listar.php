<?php include_once "../template/head.php"; ?>
<?php include_once "../template/menu.php"; ?>
<article class="principal-conteudo">  
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Identificador</th>
            <th scope="col">Nome</th>
            <th scope="col">Preço</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php if(isset($_SESSION["produtos"]) && !empty($_SESSION["produtos"])){?>
                <?php foreach($_SESSION["produtos"] as $produto){?>
                    <tr>
                        <td><?=isset($produto['id'])? $produto['id']: "" ?></td>
                        <td><?=isset($produto['nome_cad'])? $produto['nome_cad']: ""?></td>
                        <td><?=isset($produto['preco_cad'])? $produto['preco_cad']: ""?></td>
                        <td><?=isset($produto['quantidade_cad'])? $produto['quantidade_cad']: ""?></td>
                        <td class="coluna-opc">
                           <a class="bt-opc btn btn-primary" href="../../index.php?route=produto/atualizar&&id=<?=$produto['id']?>">Alterar</a>
                            <form method="POST" action="../../index.php?route=produto/excluir">
                                <input type="hidden" name="id" value='<?=$produto['id']?>'>
                                <button class="bt-opc btn btn-danger" type="submit"> Excluir</button>
                            </form>

                        </td>
                    </tr>
                <?php } ?>
            <?php }else { ?>
                <div class="alert alert-primary" role="alert">
                    <b>Lista vazia!</b> dados insuficientes 
                </div>
            <?php } ?>
        </tbody>
    </table>
</article>

<?php include_once "../template/footer.php" ?>