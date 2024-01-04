<?php  
// linking the files php
$root = $_SERVER["DOCUMENT_ROOT"];
include_once $root."/inclusive project/database/database.php";
include_once $root."/inclusive project/database/ProgrammeDB.php";
include_once $root."/inclusive project/database/DepartmentDB.php";
// include_once "DepartementDB.php";

$action=$_POST["action1"];


if($action=="getprogrammedetails")
{
    $dbo =new Database();
    $pdo =new ProgrammeDB();

    $result = $pdo->getAllProgrammes($dbo);

    $rv = json_encode($result);
    echo($rv);
    exit();
}
if ($action =="getdepartementdetails") 
{
    $dbo =new Database();
    $ddo =new DepartmentDB();

    $result = $ddo->getAllDepartments($dbo);

    $rv = json_encode($result);
    echo($rv);
    exit();    
}

if ($action =="saveprogrammedetails") 
{
    $code=$_POST["code"];
    $title=$_POST["title"];
    $Technicale_Level=$_POST["Technicale_Level"];
    $Nembre_Of_Semstere=$_POST["Nembre_Of_Semstere"];
    $Graduation_Level=$_POST["Graduation_Level"];
    $departement=$_POST["departement"];

    $dbo =new Database();
    $pdo =new ProgrammeDB();

    $result = $pdo->createNewProgramme($dbo,$code,$title,$Nembre_Of_Semstere,$Graduation_Level,$Technicale_Level,$departement);
    
    if ($result == 1) {
        $result = $pdo->getAllProgrammes($dbo);
    }
    echo json_encode($result);
    // echo $result;
    exit();
}

if ($action =="editprogrammedetails") 
{
    $code=$_POST["code"];
    $title=$_POST["title"];
    $Technicale_Level=$_POST["Technicale_Level"];
    $Nembre_Of_Semstere=$_POST["Nembre_Of_Semstere"];
    $Graduation_Level=$_POST["Graduation_Level"];
    $departement=$_POST["departement"];
    $pid=$_POST["pid"];

    $dbo =new Database();
    $pdo =new ProgrammeDB();

    // $result = $pdo->updateProgrammeDetails($dbo,$pid,$title,$code,$nos,$gl,$tl,$did);
    $result = $pdo->updateProgrammeDetails($dbo,$pid,$title,$code,$Nembre_Of_Semstere,$Graduation_Level,$Technicale_Level,$departement);
    
    if ($result == 1) {
        $result = $pdo->getAllProgrammes($dbo);
    }
    echo json_encode($result);
    // echo $result;
    exit();
}

if ($action =="deleteprogrammedetails") 
{
    $pid=$_POST["pid"];

    $dbo =new Database();
    $pdo =new ProgrammeDB();

    $result = $pdo->delete($dbo,$pid);
    
    if ($result == 1) {
        // echo $result;
        $result = $pdo->getAllProgrammes($dbo);
    }
    $rv = json_encode($result);
    echo $rv;
    // echo json_encode($result);
    // echo $result;
    exit();
}