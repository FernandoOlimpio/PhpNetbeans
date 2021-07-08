<?php
include_once './ProdutoController.php';

$id = $_REQUEST['id'];
$lc = new LivroController();
$lc->pesquisar($id);
header("Location: ../cadastroLivro.php");