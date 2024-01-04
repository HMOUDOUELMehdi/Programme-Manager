<?php 

require_once "database.php";

class DepartmentDB// it is not necessarily to named this class name of file
{

    public function getAllDepartments($dbo)
    {
        $cmd="select 

        dd.id as did,
        dd.title as dtitle,
        dd.code as dcode

        from
        department_details as dd ";

        $statement = $dbo->connect->prepare($cmd);
        $statement->execute();
        $rv = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $rv;
    }
}

?>