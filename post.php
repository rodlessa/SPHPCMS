<?php include("cabecalho.php");?>
<?php include("conecta.php");?>

<?php

function insereProduto($conexao, $title, $post){
	$query = "insert into post (title, post) values ('{$title}', '{$post}')";
	return mysqli_query($conexao, $query);
}
$title = $_POST["title"];
$post = $_POST['post'];
$conexao = mysqli_connect('localhost', 'root', '', 'spiri314_post');

?>

<?php
if(insereProduto($conexao, $title, $post)) {
?>
<p class="alert-success">Post <?= $title; ?>, publicado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao);
?>
<p class="alert-danger">O Post <? = $title; ?> não foi publicado <?= $msg ?></p>
<?php
}
?>
<?php include ("rodape.php")?>