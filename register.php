<?php 
    include_once('config.php');
    $output ="";
    if(!empty($_POST['txt_username']) && !empty($_POST['txt_email']) && !empty($_POST['txt_password']))
    {
        //$output.= "Have item";
        $sql = "INSERT INTO multiusers(username, email, password, role) VALUE(:username, :email, :password, :role)";
        $query = $db->prepare($sql);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':role', $role, PDO::PARAM_STR);
        
        $username = $_POST['txt_username'];
        $email = $_POST['txt_email'];
        $password= $_POST['txt_password'];
        $role = $_POST['txt_role'];

        $result = $query->execute();
        
    } else {
        $output.="Fail";
    }

    echo $output;

?>