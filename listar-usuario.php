<h1>Listar Usuarios</h1>
<?php 
$sql = "SELECT * FROM usuarios ";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd > 0 ){
    print"<table class ='table table-hover table-striped table-bordered'>";
    print"<tr>";
    print"<th>ID<td>";
    print"<td>Nome<td>";
    print"<th>E-mail<td>";
    print"<th>Data De Nascimento<td>";
    print"<tr>";
    while($row = $res->fetch_object()){
        print"<tr>";
        print"<td>".$row->id."<td>";
        print"<td>".$row->nome."<td>";
        print"<td>".$row->email."<td>";
        print"<td>".$row->data_nasc."<td>";
        print"<td><button onclick=\"location.href='?page=editar&id=".$row->id."';\" class = 'btn btn-success'>Editar</button></td>";
        print"<td>
        <button onclick=\"if(confirm('Tem certeza que deseja excluir?!')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class = 'btn btn-danger'>Excluir</button></td>";
        print"<tr>";


    }
    print"<table>";
}
else{
    print"<p class ='alert alert-danger'>Não encontrou resultados!</p>";

}





?>