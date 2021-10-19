<?php

class Usuario
{
    public static function Logar($login, $senha)
    {
        $pdo = ConectBD::conectar();

        $sql = "SELECT users.login as login,
        users.senha as senha,
        possui_cargo.id_cargo as cargo
        FROM users 
        INNER JOIN possui_cargo on users.id_user = possui_cargo.id_user
        WHERE login = :login";

        $stmt = $pdo->prepare($sql);
        $stmt->execute( array("login" => $login) );
        $result = $stmt->fetchAll();

        if($result){
            $senha = md5($senha);
            if($result[0]['senha'] == $senha){
                $_SESSION['logado'] = true;
                $_SESSION['nome_login'] = $result[0]['login'];
                $_SESSION['cargo'] = [];
                foreach($result as $r){
                    array_push($_SESSION['cargo'], $r['cargo']);
                }
                header('location: /'.ROOT.'/home');
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
            header('location: ../home');
        }
        if(isset($_SESSION['logado']) && count(array_intersect($_SESSION['cargo'], $permissao)) == 0){
            header('location: ../home');
        }
    }

    public static function buscarCargos($id = null)
    {
        $pdo = ConectBD::conectar();

        if($id == null){ /* buscar toda lista de cargos */
            $sql = "SELECT * FROM cargos";
        }else{ /* buscar apenas os cargos de um usuário */
            $sql = "SELECT cargos.nome from possui_cargo 
            inner join cargos on cargos.id_cargo = possui_cargo.id_cargo 
            where possui_cargo.id_user = $id";
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