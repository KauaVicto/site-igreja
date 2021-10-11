<?php

class Devocional
{
    public static function salvarBD($assunto, $descricao, $data, $arquivo)
    {
        var_dump($arquivo);
        /* Extensão do arquivo */
        $extensao = $arquivo[1];
        $nome_arquivo = md5($arquivo[0]) . strtotime('now') . '.' . $extensao;

        move_uploaded_file($_FILES['arquivo_dev']['tmp_name'], "public/pdf/devocionais/$nome_arquivo");

        $pdo = ConectBD::conectar();
        $sql = 'INSERT INTO devocionais (assunto, descricao, data, arquivo) VALUES (:assunto, :descricao, :data, :arquivo)';
        $stmt = $pdo->prepare($sql);
        if ($stmt->execute(array('assunto' => $assunto, 'descricao' => $descricao, 'data' => $data, 'arquivo' => $nome_arquivo))) {
            header('location: /devocionais');
        }
    }

    public static function buscarBD($id = null)
    {
        $pdo = ConectBD::conectar();
        if ($id) {
            $sql = 'SELECT * FROM devocionais WHERE id = :id';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array("id" => $id));
            return $stmt->fetch();
        } else {
            $sql = 'SELECT * FROM devocionais';
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }
}
