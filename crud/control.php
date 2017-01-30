<?php

$conn = @mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME, $DB_PORT);

if(mysqli_connect_errno($conn)){
  echo "Connect Fail ... ".mysqli_connect_error();
  exit();
}
  
require("model_user.php");

if(isset($_GET['p'])){
  $pass = $_GET['p'];
}else{
  $pass = null;
}
    
switch($pass){
  case "create":
    create($conn);
    break;
      
  case "read":
    break;

  case "update":
    update($conn);
    break;

  case "delete":
    $retExc = delete($conn);
    $files = read($conn);
    require("view_list.php");    
    break;

  default:
    $files = read($conn);
    require("view_list.php");
    break;                  
}

@mysqli_close($conn);
  
# CREATE
function create($conn){
  if(isset($_POST["formUser"])){
    $user = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPass"];
    $perfil = $_POST["radPerfil"];

    if(user_create($conn, $user, $email, $pass, $perfil)){
      $retExc = "Usuário cadastrado com sucesso!";
      $files = read($conn);
      require("view_list.php");

    }else{
      echo "Falha no cadastrado.";
      require("view_create.php");
    }

  }else{
    require("view_create.php");
  }
}
  
# READ
function read($conn){
  $result = user_read($conn);
  $data = array();

  while($row = mysqli_fetch_array($result)){
    $data[] = array("id" => $row['id'],
                    "nome" => $row['nome'],
                    "email" => $row['email'],
                    "senha" => $row['senha'],                      
                    "perfil" => $row['perfil']);
  }

  return $data;
}

# UPDATE
function update($conn){

  if(isset($_POST["id"])){
    $user = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $pass = $_POST["txtPass"];
    $perfil = $_POST["radPerfil"];
    $id = $_POST["id"];
    
    if(user_update($conn, $user, $email, $pass, $perfil, $id)){
      $retExc = "Usuário alterado com sucesso!";
      $files = read($conn);
      require("view_list.php");
      return false;      

    }else{
      echo "Falha na alteração.";
    }
  }
  
  if(isset($_POST["id"])){
    $id = $_POST["id"];
  }else{
    $id = $_GET["cod"];
  }
  
  $result = user_readId($conn, $id);

  if(!$result){
    echo "Falha na busca por ID.";
    return false;
  }

  $dataUser = mysqli_fetch_row($result);
  $data = array("id" => $dataUser[0],
                "nome" => $dataUser[1],
                "email" => $dataUser[2],
                "senha" => $dataUser[3],                      
                "perfil" => $dataUser[4]);

  require("view_update.php");
  //print_r($dataUser);
}

# DELETE
function delete($conn){
  $id_user = (isset($_GET["cod"])) ? $_GET["cod"] : -1;
  $result = user_delete($conn, $id_user);

  if($result){
    return "Usuário excluído.";

  }else{
    return "";
  }
}
  
  
