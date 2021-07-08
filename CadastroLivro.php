<?php
$l = new Livro();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
        <title>Formulário</title>
        <style>
            .btInput{
                padding: 10px 20px 10px 20px;
                margin-top: 20px;
                margin-bottom: 20px;
            }
        </style>
    </head>

<body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Leia Livro</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row" style="margin-top: 20px">
            <div class="col-md-5 //offset-2">
                <div class="card-header bg-dark text-light text-center border">
                    Cadastro de Livro
                </div>
                <div class="card-body border">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <label>Código: </label> 
                                <br>

                                <label> Título</label>
                                <input class="form-control" type="text"
                                       name="titulo" value="<?php echo $l->getTitulo(); ?>">

                                <label> Autor</label>
                                <input class="form-control" type="text"
                                       name="autor">

                                <label> Editora </label>
                                <input class="form-control" type="text"
                                       name="editora">

                                <label> Qtd Estoque </label>
                                <input class="form-control" type="number"
                                       name="qtdEstoque">

                                <input type="submit" name="cadastrarLivro"
                                       class="btn-success" value="Enviar">
                                &nbsp; &nbsp;  
                                <input type="submit" class="btn-light" 
                                       value="Limpar">

                            </div>      
                    </form>
                </div>

                <?php
                include_once 'c:/xampp/htdocs/PhpNetbeans/controller/LivroController.php';
                //envio dos dados para o BD
                if (isset($_POST['cadastrarLivro'])) {

                    $titulo = $_POST['titulo'];
                    if ($titulo != "") {
                        $autor = $_POST['autor'];
                        $editora = $_POST['editora'];
                        $qtdEstoque = $_POST['qtdEstoque'];


                        $lc = new LivroController();
                        unset($_POST['cadastrarLivro']);
                        echo $lc->inserirLivro($titulo, $autor, $editora, $qtdEstoque);
                        echo "<META HTTP-EQUIV='REFRESH' CONTENT=\"2;
                                    URL='cadastroLivro.php'\">";
                    }
                }
                
                if (isset($_POST['limpar'])) {
                    $lc2 =new LivroController();
                    $lc2 = 
    
}
                ?>  
            </div>
        </div>


        <!--<div class="row" style="margin-top: 30px;">-->

        <div class="col-md-7">
            <table class="table table-striped table-responsive">
                <thead class="table-dark">
                    <tr><th>Código</th>
                        <th>Título</th>
                        <th>Autor </th>
                        <th>Editora </th>
                        <th>Estoque</th>
                        <th></th>
                        <th>Ações</th></tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'c:/xampp/htdocs/PhpNetbeans/controller/LivroController.php';

                    $lcTable = new LivroController();
                    $listaLivro = $lcTable->listarLivro();
                    $a = 0;
                    if ($listaLivro != null) {
                        foreach ($listaLivro as $ll) {
                            $a++;
                            ?>

                            <tr> <!--<?php // jeito de preencher tabela mesclando php e html ?>-->
                                <td> <?php print_r($ll->getIdLivro()); ?></td>
                                <td> <?php print_r($ll->getTitulo()); ?></td>
                                <td> <?php print_r($ll->getAutor()); ?></td>
                                <td> <?php print_r($ll->getEditora()); ?></td>
                                <td> <?php print_r($ll->getQtdEstoque()); ?></td>

                                <td><!-- Button trigger modal -->
                                    <button type="button"  href="controller/EditarLivro.php?id<?php echo $ll->getIdLivro();?>" class="btn btn-primary" data-bs-toggle="modal" 
                                            data-bs-target="#staticBackdropEditar">
                                        Editar</button></td>

                                <!-- Modal -->
                        <div class="modal fade" id="staticBackdropEditar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Editar Livro</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                    
                                      


                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-primary">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Button trigger modal -->
                        <td> <button type="button" href="controller/ExcluirLivro.php?id<?php echo $ll->getIdLivro();?>" class="btn btn-warning" data-bs-toggle="modal" 
                                     data-bs-target="#staticBackdrop">
                                Excluir</button> </td>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Excluir Livro</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        
                                        <form method="get" action="ExcluirLivro.php">
                                        <label><strong>Deseja excluir o Livro
                                            <?php echo $ll->getTitulo();?>?</strong></label>
                                        <input type="hidden" name="ide"
                                               value="<?php echo $ll->getIdLivro();?>">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Sim</button>
                                        <button type="button" class="btn btn-primary">Não</button>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>

                        </tr>




                     <?php   
                    }
                    
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>





<script src="js/bootstrap.js" </script>
<script src="js/bootstrap.min.js" </script> 



</body>




</html>