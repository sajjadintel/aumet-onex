<?php


class ProspectedCompany extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'production.ProspectedCompany');
    }

    public function getById($id)
    {
        return parent::getByField('"ID"', $id);
    }
}