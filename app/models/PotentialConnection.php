<?php


class PotentialConnection extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'onex.vwPotentialConnections');
    }

    public function getByAvailableConnectionsByCountry($companyId, $countryId)
    {
        return parent::getWhere('"companyId"='.$companyId.' and "connectionStatusId"=1 and "CountryID"='.$countryId);
    }
}