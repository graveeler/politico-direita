<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct('addresses', ['user_id',  'street', 'number', 'neighborhood', 'city', 'state', 'country'], 'id', true);
    }

    function user()
    {
        return (new User())->findById($this->user_id);
    }
}
