<?php
$root = $_SERVER["DOCUMENT_ROOT"];
include_once $root."/inclusive project/database/database.php";
include_once $root."/inclusive project/database/ProgrammeDB.php";
// include_once $root."/inclusive project/database/DepartmentDB.php";

// $dbo =new Database();
// $pdo =new ProgrammeDB();

// $result = $pdo->updateProgrammeDetails($dbo,"nnnnnn"," in electronics","ECE",8,"UG","BTECH",6);
// // ($dbo," in electronics","ECE",8,"UG","BTECH",6)

// if ($result == 1) {
//     $result = $pdo->getAllProgrammes($dbo);
// }
// echo json_encode($result);

// // echo $result;

// exit();



// $pid=$_POST["pid"];

$dbo =new Database();
$pdo =new ProgrammeDB();

$result = $pdo->delete($dbo,43);
echo $result;
// if ($result == 1) {
//     $result = $pdo->getAllProgrammes($dbo);
// }
// echo json_encode($result);
// // echo $result;
// exit();




?>
