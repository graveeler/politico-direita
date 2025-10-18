<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Contact extends DataLayer
{
      function __construct()
      {
            parent::__construct('contacts', ['user_id', 'name', 'email', 'message'], 'id', true);
      }

      function user()
      {
            return (new User())->findById($this->user_id);
      }
}
