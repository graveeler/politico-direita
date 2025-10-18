<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Email extends DataLayer
{
    public function __construct()
    {
        parent::__construct('emails', ['domain_id', 'sender', 'recipient', 'subject', 'message'], 'id', true);
    }

    function domain()
    {
        return (new Domain())->findById($this->id);
    }
}
