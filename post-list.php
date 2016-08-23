<?php include("cabecalho.php");?>
<!-- For some reason include conecta doesn't work -->

<?php 
$conexao = mysqli_connect('localhost', 'root', '', 'db');
$resultado = mysqli_query($conexao, "select * from post ORDER BY id DESC"); // Order by last to first post //

while($post = mysqli_fetch_assoc($resultado)) {
    echo "<h1>". $post['title'] . "<br/></h1>";
    echo $post['post'] . "<br/>";
}
?>
<?php include("rodape.php");?>