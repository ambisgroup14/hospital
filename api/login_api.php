<?php
include('../include/connection.php');

if(isset($_POST['login_api'])){

    $email=safe($con,$_POST['signinEmail']);
    $password=safe($con,$_POST['signinPassword']);
    $rememberMe=safe($con,$_POST['rememberMe']);
    $_SESSION['ADMIN_LOGIN']="YES";


    $data=array(
        "status"=>200,
        "msg"=>"true"
    );

    echo json_encode($data);
    
}


?>