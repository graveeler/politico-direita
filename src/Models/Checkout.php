<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Checkout extends DataLayer
{
    public function __construct()
    {
        parent::__construct('checkouts', ['domain_id', ], 'id', true);
    }

    function domain()
    {
        return (new Domain())->findById($this->user_id);
    }
}