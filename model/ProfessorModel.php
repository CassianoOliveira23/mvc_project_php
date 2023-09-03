<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/' .FOLDER. '/database/Database.php';

class ProfessorModel {
    private int $idade;
    private string $nome;

    private $database;

    //getters and setters


    public function __construct()
    {
        $this->database = new Database();
    }
    

    public function listar(): array
    {
        $dadosArray = $this->database->executeSelect("SELECT * FROM professores");

        return $dadosArray;
    }

      public function salvar(string $nome, int $idade)
     {
        $sql  ="INSERT INTO professores (nome, idade) values('$nome', '$idade')";
        $this->database->insert($sql);
        
    }
}