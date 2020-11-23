<?php


class AumetUser extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'production.User');
    }

    public function getOneByCompanyId($companyId)
    {
        return parent::getByField('"CompanyID"', $companyId);
    }
}