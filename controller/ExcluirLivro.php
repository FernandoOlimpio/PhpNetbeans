<?php

include_once 'c:/xampp/htdocs/PhpNetbeans/controller/LivroController.php';

$id = $_REQUEST['ide'];
$lc = new LivroController();
$lc->excluirLivro($id);



