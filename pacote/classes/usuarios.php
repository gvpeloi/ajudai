<?php

require_once "db.php";

class Usuario
{
    public $id_usuario;
    public $nome;
    public $telefone;
    public $endereco;

    public static function cadastrar($nome, $telefone, $email, $senha)
    {
		$db = new DB();
        $sql = $db->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();
        if ($sql->rowCount() > 0)
            return false;

        $sql = $db->prepare("INSERT INTO usuarios(nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":t", $telefone);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", password_hash($senha, PASSWORD_DEFAULT));
        $sql->execute();
        return true;
    }

    public static function logar($email, $senha)
    {
		$db = new DB();
        $sql = $db->prepare("SELECT id_usuario, senha FROM usuarios WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if ($sql->rowCount() == 0)
            return false;
            
        $dado = $sql->fetch();
        if(!password_verify($senha, $dado["senha"]))
            return false;

        session_start();
        $_SESSION['id_usuario'] = $dado['id_usuario'];
        return true;
    }

    public static function getAll()
    {
        $db = new db();

        $sql = $db->prepare("SELECT * FROM usuarios");
        $sql->setFetchMode(PDO::FETCH_CLASS, "Usuario");
        $sql->execute();

        return $sql->fetchAll();
    }

    public static function get($id)
    {
        $db = new db();

        $sql = $db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id");
        $sql->bindValue(":id", $id);
        $sql->setFetchMode(PDO::FETCH_CLASS, "Usuario");
        $sql->execute();

        return $sql->fetch();
    }

    public static function getCurrent()
    {
        if (!isset($_SESSION['id_usuario']))
            return null;

        $db = new db();
        $sql = $db->prepare("SELECT * FROM usuarios WHERE id_usuario = :id");
        $sql->bindValue(":id", $_SESSION['id_usuario']);
        $sql->setFetchMode(PDO::FETCH_CLASS, "Usuario");
        $sql->execute();

        if ($sql->rowCount() == 0) {
            unset($_SESSION['id_usuario']);
            return null;
        }
        return $sql->fetch();
    }
}
