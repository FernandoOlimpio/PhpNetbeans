<?php

include_once 'LivroController.php';
$id = $_REQUEST['ide'];
$lc = new LivroController();
$lc->excluirLivro($id);


