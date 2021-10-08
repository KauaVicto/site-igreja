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
        $sql = 'INSERT INTO devocionais (assunto, descricao, data) VALUES (:assunto, :descricao, :data)';
        $stmt = $pdo->prepare($sql);
        if($stmt->execute( array('assunto' =>$this->assunto, 'descricao' => $this->descricao, 'data' => $this->data))){
            header('location: /devocionais');
        }
    }

    public static function buscarBD()
    {
        $pdo = BD::conectar();
        $sql = 'SELECT * FROM devocionais';
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }
}
