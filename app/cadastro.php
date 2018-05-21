<?php
include_once 'Database.php';

$db = new Database();

if(isset($_POST))
{
    $db->registraCadastro($_POST);
    header("Location:../index.php");
}
else echo "ERRO AO SALVAR DADOS!";
