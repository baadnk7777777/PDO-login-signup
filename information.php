<?php 
    session_start();
    include_once('config.php');

    $output = "";
    if(!empty($_POST['txt_full']))
    {
        
        $sql = "INSERT INTO user_detail(userid, fullname, lastname, sex, address, region, postalcode, phone)
                        VALUE(:userid, :fullname, :lastname, :sex, :address, :region, :postalcode, :phone)";
                        
        $query = $db->prepare($sql);
        $query->bindParam(':userid', $user_id, PDO::PARAM_STR);
        $query->bindParam(':fullname', $fullname, PDO::PARAM_STR);
        $query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
        $query->bindParam(':sex', $sex, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':region', $region, PDO::PARAM_STR);
        $query->bindParam(':postalcode', $postalcode, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_STR);

        $user_id = $_SESSION['user_id'];
        $fullname = $_POST['txt_full'];
        $lastname = $_POST['txt_last'];
        $sex = $_POST['sex'];
        $address = $_POST['txt_add'];
        $region = $_POST['txt_re'];
        $postalcode = $_POST['txt_pos'];
        $phone = $_POST['txt_pho'];

        $result = $query->execute();

    } else {
        $output.="Fail" ;   
    }

        
?>