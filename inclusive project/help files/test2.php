<?php

$root = $_SERVER["DOCUMENT_ROOT"];
include_once $root."/inclusive project/database/database.php";

$dbo = new Database();
    
function createNewProgramme($dbo,$code,$title,$nos,$gl,$tl,$did)
{
    $cmd = "insert into programme_details 
    (title,code,no_of_sem,graduation_level,technical_level,department_id)
    values
    (:title,:code,:no_of_sem,:graduation_level,:technical_level,:department_id)
    ";

    $statement = $dbo->connect->prepare($cmd);

    try {
        $statement->execute([":title"=>$title,
        ":code"=>$code,
        ":no_of_sem"=>$nos,
        ":graduation_level"=>$gl,
        ":technical_level"=>$tl,
        ":department_id"=>$did,
    ]);
   
    return 1;

    } catch (Exception $t) {
        return 0 ;
    }

}


$result = createNewProgramme($dbo,'$code','$title',5,'$gl','$tl',89);

if ($result == 1) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Successfully    
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
} else {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        Error creating account    
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
}


?>
