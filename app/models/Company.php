<?php


class Company extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'production.Company');
    }

    public function getById($id)
    {
        return parent::getByField('"ID"', $id);
    }
}