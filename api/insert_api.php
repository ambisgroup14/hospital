<?php
include('../include/connection.php');

$date=date("Y-m-d");
$adminId="1";

if(isset($_POST['insert_medicine'])){   
    
    $productName=safe($con,$_POST['productName']);
    $medicineCat=safe($con,$_POST['medicineCat']);
    $medicineCompany=safe($con,$_POST['medicineCompany']);
    $medicineComposition=safe($con,$_POST['medicineComposition']);
    $medicineGroup=safe($con,$_POST['medicineGroup']);
    $minLevel=safe($con,$_POST['minLevel']);
    $reorderLevel=safe($con,$_POST['reorderLevel']);
    $Tax=safe($con,$_POST['Tax']);
    $Unit=safe($con,$_POST['Unit']);
    $unitPacking=safe($con,$_POST['unitPacking']);
    $vat_ac=safe($con,$_POST['vat_ac']);
    $description=safe($con,$_POST['description']);

    if(isset($_FILES)){

        $image=rand(11111,99999).'_'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],IMAGE_SERVER_PATH.$image);

    }else{

        $image="";
        
    }

    mysqli_query($con,"insert into medicine (medicineName, medicineCat, medicineCom, medicineComposition, medicineGroup, medicineUnit, 
    medicineMinlev, medicineReorderlev, medicineTax, medicineUnitPacking, medicineVatAc, medicinePhoto, 
        medicineDescreption, medicineStatus, createdBy, createdOn) values ('$productName','$medicineCat','$medicineCompany','$medicineComposition',
        '$medicineGroup','$Unit','$minLevel','$reorderLevel','$Tax','$unitPacking','$vat_ac','$image','$description','1','$adminId','$date')");
        
        
        $data=array(
            "status"=>200,
            "msg"=>"true"
        );
    
        echo json_encode($data);
}

if(isset($_POST['insert_staff'])){

    $Name=safe($con,$_POST['Name']);
    $Roll=safe($con,$_POST['Roll']);
    $Designation=safe($con,$_POST['Designation']);
    $Department=safe($con,$_POST['Department']);
    $Specialist=safe($con,$_POST['Specialist']);
    $epfno=safe($con,$_POST['epfno']);
    $Basicsalary=safe($con,$_POST['Basicsalary']);
    $Contracttype=safe($con,$_POST['Contracttype']);
    $workshift=safe($con,$_POST['workshift']);
    //$Worklocation=safe($con,$_POST['Worklocation']);
    $Dateofjoining=safe($con,$_POST['Dateofjoining']);
    $Phone=safe($con,$_POST['Phone']);

    $EPhone=safe($con,$_POST['EPhone']);
    $EmailID=safe($con,$_POST['EmailID']);
    $Gender=safe($con,$_POST['Gender']);
    $Bloodgroup=safe($con,$_POST['Bloodgroup']);
    $Dateofbirth=safe($con,$_POST['Dateofbirth']);
    $Fathername=safe($con,$_POST['Fathername']);

    $Mothername=safe($con,$_POST['Mothername']);
    $Maritalstatus=safe($con,$_POST['Maritalstatus']);
    $Qualification=safe($con,$_POST['Qualification']);
    $Workexperience=safe($con,$_POST['Workexperience']);
    $Specialization=safe($con,$_POST['Specialization']);
    $Pannumber=safe($con,$_POST['Pannumber']);

    $Bankname=safe($con,$_POST['Bankname']);
    $Bankbranch=safe($con,$_POST['Bankbranch']);
    $Bankifsc=safe($con,$_POST['Bankifsc']);

    mysqli_query($con,"insert into staff (staffName, staffEmpId, staffRole, staffDesignation, staffDepartment, staffSpeciailst, staffPfno, 
    staffSalary, staffContracttype, staffWorkshift, staffDoj, staffPhone, staffEphone, staffEmail, staffGenter, staffBlood, 
    staffDob, staffMartialsta, staffFather, staffMother, staffQualification, staffExper, staffSpecial, staffPan, staffBankname, 
    staffBankifsc, staffBankbranch, staffSta, staffCreatedby, staffCreatedon) values ('$Name','','$Roll','$Designation','$Department',
    '$Specialist','$epfno','$Basicsalary','$Contracttype','$workshift','$Dateofjoining','$Phone','$EPhone','$EmailID','$Gender',
    '$Bloodgroup','$Dateofbirth','$Maritalstatus','$Fathername','$Mothername','$Qualification','$Workexperience','$Specialization',
    '$Pannumber','$Bankname','$Bankifsc','$Bankbranch','1','$adminId','$date')");

    $data=array(
        "status"=>200,
        "msg"=>"true"
    );

    echo json_encode($data);  


}

if(isset($_POST['insert_department'])){

    $Name=safe($con,$_POST['Name']);
    $Description=safe($con,$_POST['Description']);
  
    mysqli_query($con,"insert into department(depName, createdBy, createdOn, depSta, depDes)
     values('$Name','$adminId','$date','1','$Description')");

     $data=array(
        "status"=>300,
        "msg"=>"true"
    );

    echo json_encode($data);

}
?>