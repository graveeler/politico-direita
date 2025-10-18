<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class User extends DataLayer
{
    public function __construct()
    {
        parent::__construct('users', ['name', 'nick', 'email', 'cpf', 'password'], 'id', true);
    }

    function addresses()
    {
        return (new Address())->find('user_id = :uid', 'uid=' . $this->id)->fetch(true);
    }

    function domains()
    {
        return (new Domain())->find('user_id = :uid', 'uid=' . $this->id)->fetch(true);
    }

    function contacts()
    {
        return (new Contact())->find('user_id = :uid', 'uid=' . $this->id)->fetch(true);
    }
}
