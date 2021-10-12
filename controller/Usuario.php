<?php

class Usuario
{
    public static function Logar($login, $senha)
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

    public static function verificaLogin($isLogin = false)
    {
        if(isset($_SESSION['logado']) == $isLogin){
            header('location: /');
        }
    }

    public static function buscaCargo()
    {
        $pdo = ConectBD::conectar();

        $sql = "SELECT * FROM cargos";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}