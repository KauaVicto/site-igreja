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
                $_SESSION['nome_login'] = $result['login'];
                $_SESSION['cargo'] = $result['id_cargo'];
                header('location: /');
            }else{
                return 'senha incorreta';
            }
        }else{
            return 'usuario nao encontrado';
        }
    }

    public static function verificaLogin($isLogin = false, $permissao = [])
    {
        if(isset($_SESSION['logado']) == $isLogin){
            header('location: /');
        }
        if(isset($_SESSION['logado']) && !in_array($_SESSION['cargo'], $permissao)){
            header('location: /');
        }
    }

    public static function buscarCargos($id = null)
    {
        $pdo = ConectBD::conectar();

        if($id == null){
            $sql = "SELECT * FROM cargos";
        }else{
            "SELECT cargos.nome from users 
            inner join possui_cargo on users.id_user = possui_cargo.id_user 
            inner join cargos on cargos.id_cargo = possui_cargo.id_cargo 
            where users.id_user = $id";
        }
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public static function buscarUsuarios()
    {
        $pdo = ConectBD::conectar();

        $sql = "SELECT id_user, nome FROM users";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
    }

}