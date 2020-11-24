<?php


class AumetDBRoutines
{
    public static function getManufacturerScientificNameByCompanyID($companyId){
        // select * from production."GetManufacturerScientificNameByCompanyID"(274157);
        global $dbConnectionAumet;
        return $dbConnectionAumet->exec("select ID, Name, ImagePath from production.\"GetManufacturerScientificNameByCompanyID\"($companyId)");
    }
}