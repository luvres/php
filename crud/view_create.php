<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Create User</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container-fluid">
  <div class="row-fluid">
    <div class="col-xs-4" style="margin-top:20px; background-color:#2B2B51; border:2px solid grey">
      <div class="panel-heading" style="background-color:#2B2B51;">

        <form method="post" action="index.php?r=crud&p=create">
        
          <input type="hidden" name="id" value="">
          
            <!-- Nome -->
            <div class="form-group has-feedback">
              <!--<label for="inputNome" class="col-xs-0 control-label">Nome</label>-->
              <input type="text" name="txtNome" id="nome" class="form-control" required
                     style="background-color:#ffffef; border:2px solid grey; border-radius:4px"
                     placeholder="Nome" value="" autofocus>
                <i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
            
            <!-- E-mail -->                 
            <div class="form-group has-feedback">
              <!--<label for="inputNome" class="col-xs-0 control-label">Email</label>-->
              <input type="email" name="txtEmail" class="form-control" required
                     style="background-color:#ffffef; border:2px solid grey; border-radius:4px"
                     placeholder="Email" value="">
                <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
            </div>
            
            <!-- Senha -->
            <div class="form-group has-feedback">
              <!--<label for="inputNome" class="col-xs-0 control-label">Senha</label>-->
              <input type="password" name="txtPass" class="form-control" required
                     style="background-color:#ffffef; border:2px solid grey; border-radius:4px"
                     placeholder="Senha">
                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
            </div>
            
            <!-- Perfil -->
            <div class="radio">
              <label>
                <input type="radio" name="radPerfil" value="usu" checked>
                <font color="ffffff">Usuario</font>
              </label>
              <p><p>
              <label>
                <input type="radio" name="radPerfil" value="adm">
                <font color="ffffff">Administrador</font>
              </label>
            </div>
            <br>

            <input type="submit" name="formUser" value="Cadastrar" class="btn btn-warning pull-left"
                   style="border:0px solid grey; width:40%;" >
        </form>
        <form method="post" action="index.php?r=crud">
          <input type="submit" value="Listar Usuarios"
                 class="btn btn-link pull-right"
                 style="width:45%; font-size:100%; color:#F6C02A; border:0px solid grey" >
        </form>    
        <br><br>
      </div>
    </div>
  </div>
</div>
</body>
</html>
