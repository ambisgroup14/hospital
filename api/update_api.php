<?php
include('../include/connection.php');

$date=date("Y-m-d");
$adminId="1";

if(isset($_POST['update_medicine'])){   
    
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
    $id=safe($con,$_POST['update_medicine']);

    if(isset($_FILES)){

        $image=rand(11111,99999).'_'.$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],IMAGE_SERVER_PATH.$image);

        mysqli_query($con,"update medicine  set medicineName='$productName', medicineCat='$medicineCat', medicineCom='$medicineCompany', 
    medicineComposition='$medicineComposition', medicineGroup='$medicineGroup', medicineUnit='$Unit',medicineMinlev='$minLevel', 
    medicineReorderlev='$reorderLevel', medicineTax='$Tax', medicineUnitPacking='$unitPacking', medicineVatAc='$vat_ac', 
    medicinePhoto='$image', medicineDescreption='$description', updatedBy='$adminId', updatedOn='$date' where medicineId='$id' ");

    }else{

    

        mysqli_query($con,"update medicine  set medicineName='$productName', medicineCat='$medicineCat', medicineCom='$medicineCompany', 
    medicineComposition='$medicineComposition', medicineGroup='$medicineGroup', medicineUnit='$Unit',medicineMinlev='$minLevel', 
    medicineReorderlev='$reorderLevel', medicineTax='$Tax', medicineUnitPacking='$unitPacking', medicineVatAc='$vat_ac', 
    medicineDescreption='$description', updatedBy='$adminId', updatedOn='$date' where medicineId='$id' ");
        
    }

    
        
        
        $data=array(
            "status"=>200,
            "msg"=>"true"
        );
    
        echo json_encode($data);
}


if(isset($_POST['update_staff'])){

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

    $id=safe($con,$_POST['update_staff']);

    mysqli_query($con,"update staff  set staffName='$Name', staffEmpId='', staffRole='$Roll', staffDesignation='$Designation', staffDepartment='$Department', staffSpeciailst='$Specialist', staffPfno='$epfno', 
    staffSalary='$Basicsalary', staffContracttype='$Contracttype', staffWorkshift='$workshift', staffDoj='$Dateofjoining', staffPhone='$Phone', staffEphone='$EPhone', staffEmail='$EmailID', staffGenter='$Gender', staffBlood='$Bloodgroup', 
    staffDob='$Dateofbirth', staffMartialsta='$Maritalstatus', staffFather='$Fathername', staffMother='$Mothername', staffQualification='$Qualification', staffExper='$Workexperience', staffSpecial='$Specialization', staffPan='$Pannumber', staffBankname='$Bankname', 
    staffBankifsc='$Bankifsc', staffBankbranch='$Bankbranch' where  staffId='$id' " );

    $data=array(
        "status"=>200,
        "msg"=>"true"
    );

    echo json_encode($data);  

}
if(isset($_POST['update_dep'])){

    $uName=safe($con,$_POST['uName']);
    $uDescription=safe($con,$_POST['uDescription']);
    $id=safe($con,$_POST['update_dep']);
    mysqli_query($con,"update  department set depName='$uName', updatedBy='$adminId',
     updatedOn='$date', depDes='$uDescription' where depId='$id'");
     
    $data=array(
        "status"=>200,
        "msg"=>"true"
    );

    echo json_encode($data); 
}

?>