<?php

class Devocional
{
    private $assunto, $descricao, $data, $nome_arquivo;

    public function __construct($assunto, $descricao, $data, $nome_arquivo)
    {
        $this->assunto = $assunto;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->nome_arquivo = $nome_arquivo;
    }

    public function salvarBD()
    {
        $pdo = BD::conectar();
        $sql = 'INSERT INTO devocionais (assunto, descricao, data, arquivo) VALUES (:assunto, :descricao, :data, :arquivo)';
        $stmt = $pdo->prepare($sql);
        if($stmt->execute( array('assunto' => $this->assunto, 'descricao' => $this->descricao, 'data' => $this->data, 'arquivo' => $this->nome_arquivo))){
            header('location: /devocionais');
        }
    }

    public static function buscarBD($id = null)
    {   
        $pdo = BD::conectar();
        if($id){
            $sql = 'SELECT * FROM devocionais WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $stmt->execute( array("id" => $id) );
            return $stmt->fetch();
        }else{
            $sql = 'SELECT * FROM devocionais';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        
    
        

    }
}
