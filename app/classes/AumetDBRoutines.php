<?php


class AumetDBRoutines
{
    public static function getManufacturerScientificNameByCompanyID($companyId){
        global $dbConnectionAumet;
        return $dbConnectionAumet->exec("select * from production.\"GetManufacturerScientificNameByCompanyID\"($companyId)");
    }

    public static function getDistributorExperiences($distributorId){
        global $dbConnectionAumet;
        return $dbConnectionAumet->exec("select * from production.\"GetDistributorExperiences\"($distributorId)");
    }

    public static function getDistributorIntresets($distributorId){
        global $dbConnectionAumet;
        return $dbConnectionAumet->exec("select * from production.\"GetDistributorIntresets\"($distributorId)");
    }

    public static function getManufacturerProductsByCompanyId($companyId){
        global $dbConnectionAumet;
        return $dbConnectionAumet->exec("select * from onex.\"getManufacturerProductsByCompanyId\"($companyId)");
    }
}