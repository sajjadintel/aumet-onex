<?php


class Country extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'public.countries');
    }

    public function getByUID($uid)
    {
        return parent::getByField('uid', $uid);
    }
}