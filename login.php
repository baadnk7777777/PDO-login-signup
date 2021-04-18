<?php 

session_start();
$output = "";
include_once ('config.php');

    if(!empty ($_POST['txt_email']) && !empty($_POST['txt_password']))
    {
        

        $sql = "SELECT* FROM multiusers WHERE email  = :email";
        $query = $db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $email = $_POST['txt_email'];
        $password = $_POST['txt_password'];
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        if($query->rowCount() > 0) {
            foreach($result as $res) {
                if($res->email == $email && $res->password == $password)
                {
                    $output.="login success";
                    $_SESSION['name'] = $res->username;
                    $_SESSION['user_id'] = $res->userid;
                }
                else{
                    $output.="login fail something wrong";
                }
            }
        }

        $output.="Text in come";
    }else {
        $output.="Fail to Login";
    }

    echo $output;
?>