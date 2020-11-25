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

    /**
     * @param $companyId
     * @return array array of (title text, description text, image text, slug text)
     */
    public static function getManufacturerProductsByCompanyId($companyId){
        global $dbConnectionAumet;
        $arr = $dbConnectionAumet->exec("select * from onex.\"getManufacturerProductsByCompanyId\"($companyId)");
        return array_map(function ($obj) {
            return BaseModel::toObject($obj);
        }, $arr);
    }

    public static function getManufacturerSpecialityByComID($companyId){
        global $dbConnectionAumet;
        return $dbConnectionAumet->exec("select * from onex.\"GetManufacturerSpecialityByComID\"($companyId)");
    }
}