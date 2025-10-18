<?php

namespace Source\Models;

use NTTech\DataLayer\DataLayer;

class Domain extends DataLayer
{
      function __construct()
      {
            parent::__construct('domains', ['url', 'user_id', 'alias', 'token'], 'id', true);
      }

      function user()
      {
            return (new User())->findById($this->user_id);
      }

      function checkouts()
      {
            return (new Checkout())->find('domain_id = :did', 'did=' . $this->id)->fetch(true);
      }

      function leads()
      {
            return (new Lead())->find('domain_id = :did', 'did=' . $this->id)->fetch(true);
      }

      function domainAccesses()
      {
            return (new DomainAccess())->find('domain_id = :did', 'did=' . $this->id)->fetch(true);
      }

      function newsletters()
      {
            return (new NewsLetter())->find('domain_id = :did', 'did=' . $this->id)->fetch(true);
      }

      function emails()
      {
            return (new Email())->find('domain_id = :did', 'did=' . $this->id)->fetch(true);
      }
}
