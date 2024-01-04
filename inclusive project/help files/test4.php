<?php


require_once "database.php";
require_once "ProgrammeDB.php";
// require_once "DepartmentDB.php";




$dbo=new Database();
$pdo=new ProgrammeDB();
// $ddo=new DepartmentDB();

$rv=$pdo->getAllProgrammes($dbo);
print_r($rv);

// echo ("<br><br>");

$rv=$pdo->createNewProgramme($dbo," in electronics","ECE",8,"UG","BTECH",6);
echo($rv );
echo ("<br><br>");
$rv=$pdo->getAllProgrammes($dbo);
print_r($rv);

$rv=$pdo->createNewProgramme($dbo," in electronics","ECE",8,"UG","BTECH",6);
echo($rv );
echo ("<br><br>");
$rv=$pdo->getAllProgrammes($dbo);
print_r($rv);
