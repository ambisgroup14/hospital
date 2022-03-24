<?php
include('../include/connection.php');

if(isset($_POST['Deletemastertable'])){ 

   
    
        $table=safe($con,$_POST['Deletemastertable']); 
        $tableid=safe($con,$_POST['Deletemasterid']); 
        $value=safe($con,$_POST['Deletemastervalue']); 
        $sta=safe($con,$_POST['Deletemastersta']); 
        
        Deletemaster($table,$tableid,$value,$sta,$con);
        
        $data=array(
            "status"=>200,
            "msg"=>"true"
        );
    
        echo json_encode($data);    
        
    

}


?>