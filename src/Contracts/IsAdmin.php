<?php

namespace WpService\Contracts;

interface IsAdmin
{
  /**
   * Check whether the current user is an administrator.
   *
   * @return bool
   */
    public function isAdmin(): bool;
}
