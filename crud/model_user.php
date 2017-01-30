<?php

# CREATE
function user_create($conn, $name_user, $email_user, $pass_user, $perfil_user){
  if($name_user == ""){
    return false;
  }
  $sql = sprintf("INSERT INTO usuario VALUES(null,'%s','%s','%s','%s')",
                  $name_user, $email_user, $pass_user, $perfil_user);
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  return $result;
}

# READ
function user_read($conn){
  $sql = "SELECT * FROM usuario";
  $result = mysqli_query($conn, $sql);
  return $result;
}

# UPDATE
function user_readId($conn, $id_user){
  $sql = sprintf("SELECT * FROM usuario WHERE id = %s", $id_user);
  $result = mysqli_query($conn, $sql);
  return $result;
}

function user_update($conn, $name_user, $email_user, $pass_user, $perfil_user, $id_user){
  if($name_user == ""){
    return false;
  }
  $sql = sprintf("UPDATE usuario SET nome='%s',email='%s',senha='%s',perfil='%s' WHERE id='%s'",
                  $name_user, $email_user, $pass_user, $perfil_user, $id_user);
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  return $result;
}

# DELETE
function user_delete($conn, $id_user){
  $sql = sprintf("DELETE FROM usuario WHERE id = %s", $id_user);
  $result = mysqli_query($conn, $sql);
  return $result;
}
  
