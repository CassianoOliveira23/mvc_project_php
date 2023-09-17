<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Professores</title>

    <!--Link do CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">  

    <!--Link do JS--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>  

    <!--Link do Jquery--> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>


<body>

  <!-- Modal -->
  <body>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="staticBackdropLabel">Atenção</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Você deseja realmente excluir este registro?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-bs-dismiss="modal" id="close-modal">Fechar</button>
                  <button type="button" class="btn btn-danger" id="delete-button">Excluir</button>
              </div>
          </div>
      </div>
  </div>


  <div class="modal fade" id="userDeleted" tabindex="-1" aria-labelledby="userDeletedLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="userDeletedLabel">Parabéns!</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Usuário deletado com sucesso!!!
              </div>
          </div>
      </div>
  </div>

    <header class="bg-black text-white p-5 text-center m-0">
        <h1>Semana da Acessibilidade</h1>
    </header>

    <!-- Navbar -->
    <?php require_once  $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

    

  
    


    <div class="contrainer-fluid  m-5 text-center">
        <img src="/<?php echo FOLDER; ?>/imagens/bb.jpeg" class="img-center" alt="Semana da Acessibilidade escrito no centro com fundo azul ao lado direito o logo do TRE-BA (uma esfera branca da bandeira do brasil com as constelações, envolta de um retangulo) e a baixo e a direita está uma animação/desenho de 5 pessoas, sendo um homen idoso com bengala, um homen jovem que possui uma perna mecânica, um homem cadeirante e uma mulher com muletas ">

    </div>
    <br>
    <div class="justify-content-center m-5 text-center">
      <a  href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-dark">Cadastrar Professor</a>
      
    </div>

     
    

    
    
    

    
    

        
          
    
           
           
           

    <div class="container mt-5 mb-5">
        <h1 class="container-fluid text-center mb-5">Lista de Professores</h1>


      <table class="table">
          <thead>
            <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nome</th>
                  <th scope="col">Idade</th>
                  <th scope="col">Ações</th>
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
                                <!--<a href="/<?php echo FOLDER; ?>?controller=Professor&acao=excluir&id=<?php echo $professorAtual['id']; ?>" class="btn btn-danger">Excluir</a>-->

                               
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger select-user-to-delete" data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-id="<?php echo $professorAtual['id']; ?>">Excluir</button>
                              </td>
                        </tr>
              <?php } ?>
          </tbody>
      </table>


      <script>
        $("#delete-button").on("click", function() {
            let idUsuario = $(this).attr('data-id');

            let url = "/<?php echo FOLDER; ?>/?controller=Professor&acao=excluir&id=" + idUsuario;
            $.get(url, function(data) {
                $("#close-modal").click();
                var myModal = new bootstrap.Modal(document.getElementById('userDeleted'))
                myModal.show();

            });
            console.log("O usuario para ser deletado é: " + idUsuario);
        });

        $("#userDeleted").on("hidden.bs.modal", function() {
            location.reload();
        });

        $(".select-user-to-delete").on("click", function() {

            $("#delete-button").attr("data-id", $(this).attr('data-id'));
            console.log("O usuário escolheu o Professor que talvez possa ser deletado");
        });
    </script>


    


    
   

    </div>

    <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">

    <div class="container">
        <h4>Desenvolvedor Full stack Cassiano Oliveira</h4>
        <p>Fone: (xx) xxxx-xxxx</p>

    </div>
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>