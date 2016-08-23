<?php include("cabecalho.php")?>
 
<h1>Publicar novo Post</h1>
<form method="post" action="post.php">
<table class="table">
<tr>
<td>Titulo:</td>
<td><input class="form-control" type="text" name="title"/></td>
</tr>
<tr>
<td>Texto:</td>
<td><textarea class="form-control" rows="20" name="post"></textarea></td>
</tr>
<tr>
<td>
<input class="btn btn-primary" type="submit" name="Cadastrar"></td>
</tr>
</form>
<?php include("rodape.php")?>