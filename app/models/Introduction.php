<?php

class Introduction extends \BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'onex.introduction');
    }

    public function getByCompany($companyId)
    {
        return $this->getByField('"fromCompanyId"', $companyId);
    }

    public function getById($introductionId)
    {
        return $this->getByField('"id"', $introductionId);
    }
}