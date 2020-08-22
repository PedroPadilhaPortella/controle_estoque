<?php
require_once "../head.php";

?>
<body>
<a class="btn btn-primary" style="margin: 20px 0 0 140px;" href="../pages/listar.php" role="button"><i class="fas fa-undo"></i>&nbsp;Voltar</a>
<h3 style="text-align:center;">Formulário de Edição dos Produtos</h3>
    <div class="container" id="tamanhoContainer" style="margin-top: 10px">
        
        <form style="margin-top: 20px" action="../src/update.php" method="POST">
            <?php
            include "../src/config.php";

            $id = $_GET['id'];
            $sql = "SELECT * FROM `estoque` WHERE id = $id;";
            $busca = mysqli_query($connection, $sql);

            while($array = mysqli_fetch_array($busca)) {
                $id = $array['id'];
                $numero = $array['numero_produto'];
                $nomeProduto = $array['nome_produto'];
                $categoria = $array['categoria'];
                $quantidade = $array['quantidade'];
                $fornecedor = $array['fornecedor'];
            ?>
            <div class="form-group">
                <label>N° do Produto</label>
                <input type="number" class="form-control" name="numero_produto" value="<?php echo $numero; ?>" disabled>
                <input type="number" class="form-control" name="id" value="<?php echo $id; ?>" style="display: none;">
            </div>
            <div class="form-group">
                <label>Nome do Produto</label>
                <input type="texto" class="form-control" name="nome_produto" value="<?php echo $nomeProduto; ?>">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="quantidade" min="0" value="<?php echo $quantidade; ?>">
            </div>
            <div class="form-group">
                <label>Categorias</label>
                <select class="form-control" name="categoria" >
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Periféricos</option>
                    <option>Jogos</option>
                    <option>Celulares</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornecedor" >
                    <option>Fornecedor 1</option>
                    <option>Fornecedor 2</option>
                    <option>Fornecedor 3</option>
                    <option>Fornecedor 4</option>
                    <option>Fornecedor 5</option>
                </select>
            </div>
            <div style="text-align: right">
                <button type="submit" id="submit" class="btn">Atualizar</button>
            </div>
                <?php } ?>
        </form>
    </div>
</body>

</html>