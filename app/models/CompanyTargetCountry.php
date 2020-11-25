<?php


class CompanyTargetCountry extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'onex.companyTargetCountry');
    }

    public function getByCompanyId($companyId)
    {
        return parent::getByField('"companyId"', $companyId);
    }

    public function getByPKId($companyId, $countryId)
    {
        return parent::getWhere('"companyId" = '. $companyId . ' and "countryId" = '. $countryId);
    }
}