<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>List User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

  <div class="col-xs-1"></div>
  <p><p>
  <a href="index.php?r=crud&p=create">Cadastrar</a>

  
  <div class="col-xs-1"></div>

  <div class="col-xs-9" style="margin-top:20px; background-color:#ffffff; border:2px solid grey">
  <p>
    <a href="#"><p style="text-align:right;">Logout</a>
    <h3><p style="text-align:center;">Lista de Usuarios</h3>

<!-- ###### Tabela de usuários ####### -->
  <table style="width:100%">
  <!-- <table border="1"> -->
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>EMAIL</th>
      <th>SENHA</th>      
      <th>PERFIL</th>
      <?php foreach($files as $line) { ?>
      <tr>
        <td><?=$line['id']?></td>
        <td><?=$line['nome']?></td>
        <td><?=$line['email']?></td>
        <td><?=$line['senha']?></td>
        <td><?=$line['perfil']?></td>
  
      <td><a href="index.php?r=crud&p=update&cod=<?=$line['id']?>">
          <i class="glyphicon glyphicon-edit"></i>
	  </a>
      </td>
      <td><a href="index.php?r=crud&p=delete&cod=<?=$line['id']?>"
             onclick="return confirm('Excluir Usuario?')" >
             <i class="glyphicon glyphicon-trash" style="color:#fa5858"></i>
          </a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <p>
  </div>

<?php if(isset($retExc)) { ?>
  <h3><?=$retExc?></h3>
<?php } ?>
<!-- ################################# -->
  
</body>
</html>
