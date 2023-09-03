<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Estudante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <header class="bg-black text-white p-5 text-center m-0">    
  </header>


  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Meu site</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/<?php echo FOLDER; ?>/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Estudante&acao=listar">Estudantes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/<?php echo FOLDER; ?>/?controller=Professor&acao=listar">Professores</a>
                  </li>
                  
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
  </nav>




    <div class="container">
    <form method="POST" action="/aula3/?controller=Professor&acao=salvar">
  <div class="mb-3">
    <label for="nome" class="form-label">Nome </label>
    <input type="text" class="form-control" id="nome" name="nome">
    
  </div>
  <div class="mb-3">
    <label for="idade" class="form-label">Idade </label>
    <input type="number" class="form-control" id="idade" name="idade">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    </div>

    
</body>

</html>