<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Lead extends DataLayer
{
    public function __construct()
    {
        parent::__construct('leads', ['domain_id', 'email', 'whatsapp'], 'id', true);
    }

    function domain()
    {
        return (new Domain())->findById($this->id);
    }
}
