<?php

class Usuario
{
    public static function testarLogin($login, $senha)
    {
        $pdo = ConectBD::conectar();

        $sql = "SELECT * FROM users WHERE login = :login";
        $stmt = $pdo->prepare($sql);
        $stmt->execute( array("login" => $login) );
        $result = $stmt->fetch();

        if($result){
            $senha = md5($senha);
            if($result['senha'] == $senha){
                $_SESSION['logado'] = true;
                $_SESSION['nome'] = $result['nome'];
                $_SESSION['cargo'] = $result['id_cargo'];
                header('location: /');
            }else{
                return 'senha incorreta';
            }
        }else{
            return 'usuario nao encontrado';
        }
    }
}