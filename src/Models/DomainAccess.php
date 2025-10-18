<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class DomainAccess extends DataLayer
{
      function __construct()
      {
            parent::__construct('domain_accesses', ['domain_id'], 'id', true);
      }

      function domain()
      {
          return (new Domain())->findById($this->id);
      }
}
