<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . "/model/EstudanteModel.php";


class EstudanteController {

    const CONTROLLER_FOLDER = '/estudante';


    public function listar() {
        $estudanteModel = new EstudanteModel();
        $estudantes = $estudanteModel->listar();

        $_REQUEST["estudantes"] = $estudantes;
        
        //render na view
        require_once  $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteView.php';
    }


    public function salvar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once  $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteForm.php';

        }elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $estudanteModel = new EstudanteModel();
            $estudantes = $estudanteModel->salvar($nome, $idade);

            header('Location: http://localhost:8081/' .FOLDER. '/?controller=Estudante&acao=listar');
            exit();
        }  
    }



    public function editar()
    {
        if($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_GET["id"];

            $estudanteModel = new EstudanteModel();
            $estudante = $estudanteModel->buscarPeloId($id);

            $_REQUEST['estudante'] = $estudante;

            require_once  $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view' . self::CONTROLLER_FOLDER . '/EstudanteFormEdit.php';

        }elseif($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $id = $_GET['id'];
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $estudanteModel = new EstudanteModel();
            $estudantes = $estudanteModel->atualizarModel($id, $nome, $idade);

            header('Location: http://localhost:8081/' .FOLDER. '/?controller=Estudante&acao=listar');
            exit();
        }    

    }

    public function excluir()
    {
        $id = $_GET["id"];
        $estudanteModel = new EstudanteModel();
        $estudanteModel->excluirModel($id);

        header('Location: http://localhost:8081/' .FOLDER. '/?controller=Estudante&acao=listar');
        exit();
    }

}  

  