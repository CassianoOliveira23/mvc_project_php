<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">     <!--Link do CSS-->
</head>


<body>

    <header class="bg-black text-white p-5 text-center m-0">
        <h1>Semana da Acessibilidade</h1>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </header>

    <?php require_once  $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

      <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>

    


    <div class="contrainer-fluid  m-5 text-center">
        <img src="/<?php echo FOLDER; ?>/imagens/bb.jpeg" class="img-center" alt="Semana da Acessibilidade escrito no centro com fundo azul ao lado direito o logo do TRE-BA (uma esfera branca da bandeira do brasil com as constelações, envolta de um retangulo) e a baixo e a direita está uma animação/desenho de 5 pessoas, sendo um homen idoso com bengala, um homen jovem negro que possui uma perna mecânica, um homem cadeirante e uma mulher com muletas ">

    </div>
    <br>
    <div class="justify-content-center m-5 text-center">
      <a  href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-dark">Cadastrar Professor</a>
      
    </div>

     
    

    
    
    

    
    

        
          
    
           
           
           

    <div class="container mt-5">
        <h1 class="container-fluid text-center m-3">Lista de Professores</h1>


        <table class="table">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($professores as $key => $professorAtual) { ?>
            <tr>
                <td><?php echo $professorAtual["id"]; ?></td>
                <td><?php echo $professorAtual["nome"]; ?></td>
                <td><?php echo $professorAtual["idade"]; ?></td>
                <td>
                  <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=editar&id=<?php echo $professorAtual['id']; ?>" class="btn btn-success">Editar</a>
                </td>
                <td>
                  <a href="/<?php echo FOLDER; ?>?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <?php } ?>
    </tbody>
    </table>


    


    
   

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>