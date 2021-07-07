<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> 
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
            <div class="col-8 offset-2">
                <div class="card-header bg-dark text-light text-center border">
                    Cadastro de Livro
                </div>
                <div class="card-body border">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <label>Código:</label> <br>

                                <label> Título</label>
                                <input class="form-control" type="text"
                                       name="titulo">

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
                                <input type="reset" class="btn-light" 
                                       value="Limpar">

                            </div>      
                    </form>
                </div>
            </div>
        </div>
    </div>
        
        <?php
include_once 'c:/xampp/htdocs/PhpNetbeans/controller/LivroController.php';
//envio dos dados para o BD
if (isset($_POST['cadastrarLivro'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editora = $_POST['editora'];
    $qtdEstoque = $_POST['qtdEstoque'];


    $lc = new LivroController();
    echo $lc->inserirLivro($titulo, $autor, $editora, $qtdEstoque);
}
?>  
            <div class="row" style="margin-top: 30px;">
            <table class="table table-striped table-responsive">
                <thead class="table-dark">
                    <tr><th>Código</th>
                        <th>Título</th>
                        <th>Autor </th>
                        <th>Editora </th>
                        <th>Estoque</th>
                        <th>Ações</th></tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'c:/xampp/htdocs/PhpNetbeans/controller/LivroController.php';

                    $lcTable = new LivroController();
                    $listaLivro = $lcTable->listarLivro();
                    foreach ($listaLivro as $ll) {
                        ?>

                        <tr> <?php // jeito de preencher tabela mesclando php e html?>
                            <td> <?php print_r($ll->getIdLivro());?></td>
                            <td> <?php print_r($ll->getTitulo());?></td>
                            <td> <?php print_r($ll->getAutor());?></td>
                            <td> <?php print_r($ll->getEditora());?></td>
                            <td> <?php print_r($ll->getQtdEstoque());?></td>
                            
                            <td><a class="btn btn-primary"
                                   href="#?id=<?php echo $ll->getIdLivro();?>">
                                   Editar</a>
                                
                                <a class="btn btn-warning"
                                   href="#id=<?php echo $ll->getIdLivro();?>">
                                   Excluir</a>
                            </td>
                        </tr>
                                                  

                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>

      



<script src="js/bootstrap.js"</script>
<script src="js/bootstrap.min.js" </script> 
</body>




</html>