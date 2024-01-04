<?php 
// $root = $_SERVER["DOCUMENT_ROOT"];
// include_once $root."/inclusive project/database/database.php";
// include_once $root."/inclusive project/database/ProgrammeDB.php";



// $dbo =new Database();
// $pdo =new ProgrammeDB();


// $result = $pdo->getAllProgrammes($dbo);
// $rv = json_encode($result);
// // echo($rv);
// print_r($rv);
// exit();






















require_once "database.php";
require_once "ProgrammeDB.php";

$dbo=new Database();
$pdo=new ProgrammeDB();

$pdo->createNewProgramme($dbo,"math info","chn",6,"EG","BTECH",1)



// // require_once "DepartmentDB.php";









// // $ddo=new DepartmentDB();

// // $rv=$pdo->getAllProgrammes($dbo);
// // print_r($rv);

// // echo ("<br><br>");

// // $rv=$pdo->createNewProgramme($dbo,"btech in electronics","ECE",8,"UG","BTECH",6);
// // echo($rv );

// // echo ("<br><br>");

// // $rv=$pdo->getAllProgrammes($dbo);
// // print_r($rv);

// $rv = $pdo->getProgrammeDetailsById($dbo,61);
// print_r($rv);
// echo("<br><br><br>");

// $rv = $pdo->updateProgrammeDetails($dbo,61,"it is dog","guyutu",34,"X","Y",6);
// print_r($rv);
// echo("<br><br><br>");

// $rv = $pdo->getProgrammeDetailsById($dbo,61);
// print_r($rv);

// // $rv = $ddo->getAllDepartments($dbo);
// // print_r($rv);

?>