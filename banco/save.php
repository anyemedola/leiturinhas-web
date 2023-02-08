<?php

include 'conecta.php';
global $banco;

$book=$_POST["book"];
$autor=$_POST["autor"];
$note=$_POST["note"];
$foto=$_FILES["foto"];
$gravar=$_POST["gravar"];

if (!empty($foto["name"])) {
        
        $error = array();
        // Verifica se o arquivo é uma imagem
        if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $foto["type"])){
            $error[1] = "Isso não é uma imagem.";
            } 

        // Se não houver nenhum erro
        if (count($error) == 0) {
        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "../images/" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
            // Insere os dados no banco
            $sql = mysqli_query($banco, "INSERT INTO bookstan VALUES ('', '".$book."', '".$autor."', '".$note."', '".$nome_imagem."')");
        
            // Se os dados forem inseridos com sucesso
            if ($sql){
                echo "O livro foi cadastrado com sucesso.";
            }
        }
    
        // Se houver mensagens de erro, exibe-as
        if (count($error) != 0) {
            foreach ($error as $erro) {
                echo $erro . "<br />";
            }
        }
}


// $sql="insert into bookstan(book, autor, sinopse, img) values ('$book','$autor','$note','$image')";

// $op=$banco->query($sql);

// if($op)
// {
//         echo"INCLUSÃO EFETUADA COM SUCESSO!!!";
//         exit;
// }
// else
// {
//         echo "ERRO DE GRAVAÇÃO!!!";
//         exit;
// }


?>
