<?php


class AuthUser extends BaseModel
{
    public function __construct()
    {
        global $dbConnectionAumet;

        parent::__construct($dbConnectionAumet, 'auth.user');
    }

    public function getByUID($uid)
    {
        return parent::getByField('uid', $uid);
    }
}