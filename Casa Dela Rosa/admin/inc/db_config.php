<?php

$hname = 'localhost';
$uname = 'root';
$pass = '';
$db = 'casa dela rosa';

$con = mysqli_connect($hname,$uname,$pass,$db);

if(!$con){
  die("Cannot Connect to Database".mysqli_connect_error());  
}

function filteration($data){
   foreach($data as $key => $value){
     $data[$key] = trim($value);
     $data[$key] = stripcslashes($value);
     $data[$key] = htmlspecialchars($value);
     $data[$key] = strip_tags($value);
   }
   return $data;
}

function selectAll($table)
{
 $con = $GLOBALS['con'];
 $res = mysqli_query($con, "SELECT * FROM $table");
 return $res;
}

function select($sql, $values, $datatypes)
{
    $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql)){
      mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        return $res;
      }
      else {
      die('Query cannot be executed - Select');
      }
    }
    else {
      die('Query cannot be prepared - Select');
    }
}

function update($sql, $values, $datatypes)
{
   $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql)){
      mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        return $res;
      }
      else {
      die('Query cannot be executed - Update');
      }
    }
    else {
      die('Query cannot be prepared - Update');
    }
}

function insert($sql, $values, $datatypes)
{
   $con = $GLOBALS['con'];
    if($stmt = mysqli_prepare($con,$sql)){
      mysqli_stmt_bind_param($stmt, $datatypes, ...$values);
      if(mysqli_stmt_execute($stmt)){
        $res = mysqli_stmt_get_result($stmt);
        return $res;
      }
      else {
      die("Query cannot be executed - Insert");
      }
    }
    else {
      die("Query cannot be prepared - Insert");
    }
}

function login_user($email, $password)
{
    $con = $GLOBALS['con'];
    $sql = "SELECT password FROM users WHERE email = ?";
    if($stmt = mysqli_prepare($con, $sql)){
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        if($row = mysqli_fetch_assoc($res)){
            // Use password_verify if passwords are hashed
            if(password_verify($password, $row['password'])){
                return true;
            }
        }
    }
    return false;
    if(login_user($email, $password)){
        // Login success
    } else {
        // Login failed
    }

}

function register_user($name, $email, $phone, $password)
{
    $con = $GLOBALS['con'];
    // Hash the password for security
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $sql_check = "SELECT id FROM users WHERE email = ?";
    if($stmt_check = mysqli_prepare($con, $sql_check)){
        mysqli_stmt_bind_param($stmt_check, 's', $email);
        mysqli_stmt_execute($stmt_check);
        $res_check = mysqli_stmt_get_result($stmt_check);
        if(mysqli_fetch_assoc($res_check)){
            return "exists"; // Email already registered
        }
        mysqli_stmt_close($stmt_check);
    }

    // Insert new user
    $sql = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
    if($stmt = mysqli_prepare($con, $sql)){
        mysqli_stmt_bind_param($stmt, 'ssss', $name, $email, $phone, $password_hash);
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_close($stmt);
            return "success";
        } else {
            mysqli_stmt_close($stmt);
            return "error";
        }
    } else {
        return "error";
    }
}

?>