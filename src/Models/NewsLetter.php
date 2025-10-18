<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class NewsLetter extends DataLayer
{
    public function __construct()
    {
        parent::__construct('newsletters', ['domain_id', 'email', 'whatsapp'], 'id', true);
    }

    function domain()
    {
        return (new Domain())->findById($this->id);
    }
}
