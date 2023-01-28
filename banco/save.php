<?php

include 'conecta.php';
global $banco;

$book=$_POST["book"];
$autor=$_POST["autor"];
$note=$_POST["note"];
$image=$_POST["file"];
$gravar=$_POST["gravar"];


$sql="insert into bookstan(book, autor, note, img) values ('$book','$autor','$note','$image')";

$op=$banco->query($sql);

if($op)
{
        echo"INCLUSÃO EFETUADA COM SUCESSO!!!";
        exit;
}
else
{
        echo "ERRO DE GRAVAÇÃO!!!";
        exit;
}


?>
