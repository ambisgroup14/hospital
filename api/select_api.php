<?php
include('../include/connection.php');


if(isset($_POST['select_pharmacy'])){   
    
    $id=safe($con,$_POST['id']);    
    $res=mysqli_query($con,"select * from medicine where medicineId='$id' && medicineStatus='1'"); 

        while($row=mysqli_fetch_assoc($res)){
                $data=$row;
        }

    echo json_encode($data);
}

if(isset($_POST['select_staff'])){   
    
    $id=safe($con,$_POST['id']);    
    $res=mysqli_query($con,"select * from staff where staffId='$id' && staffSta='1'"); 

        while($row=mysqli_fetch_assoc($res)){
                $data=$row;
        }

    echo json_encode($data);
}

if(isset($_POST['select_dept'])){   
    
    $id=safe($con,$_POST['id']);    
    $res=mysqli_query($con,"select * from department where depId='$id' && depSta='1'"); 

        while($row=mysqli_fetch_assoc($res)){
                $data=$row;
        }

    echo json_encode($data);
}


?>