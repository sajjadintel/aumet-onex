<?php


class PotentialConnectionRecord extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'onex.potentialConnection');
    }

    public function getPotentialConnection($companyId, $connectedCompanyId)
    {
        return parent::getWhere('"companyId"='.$companyId.' and "potentialCompanyId"='.$connectedCompanyId);
    }
}