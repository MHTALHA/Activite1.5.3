<?php include_once("db.php");

function addUser($user,$email,$password){
    global $db;
  
    // $pepper = "c1isvFdxMDdmjOlvxpecFw";
    // $pwd_peppered = hash_hmac("sha256", $password, $pepper);
    $pwd_hashed = password_hash($password, PASSWORD_DEFAULT);

    $sqlQuery = 'INSERT INTO users(user, email, password) VALUES (:user, :email, :password)';
    
    $insertUser = $db->prepare($sqlQuery);
    
    $insertUser->execute([
        'user' => $user,
        'email' => $email,
        'password' => $pwd_hashed
        
    ]);
    header("location:index.php");
}


?>

