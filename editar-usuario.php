<h1>Editar Usuario</h1>
<?php 
$sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();

?>
<form action="?page=salvar" method="POST">
    
<input type="hidden" name="acao" value="editar">
<input type="hidden" name="id" value="<?php print $row->id;?> ">

<div class ="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" value ="<?php print $row->nome;?>" id="">
    </div>
    <div class ="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" class="form-control" value ="<?php print $row->email;?>" id="">
    </div>
    <div class ="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required id="">
    </div>
    <div class ="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" value ="<?php print $row->data_nasc;?>" id="">
    </div>
    <div class ="mb-3">
    <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>