
<?php
require "conexao.php";
require "Modelo\Produto.php";
require "Repositorio\ProdutoRepositorio.php";

//if (isset($_POST['cadastro'])){ ou
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $tipo = $_POST["tipo"];
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $imagem = $_POST["imagem"];
    $preco = $_POST["preco"];

    $produto = new Produto(0,
        $tipo,
        $nome,
        $descricao,
        $imagem,
        $preco
    );

    $produtoRepositorio = new ProdutoRepositorio($conn);
    $produtoRepositorio->cadastrar($produto);
    header("Location: cadastrar-produtos-sucesso.php");
}
?>


