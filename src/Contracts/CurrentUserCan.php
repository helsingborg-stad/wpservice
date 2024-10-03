<?php

namespace WpService\Contracts;

interface CurrentUserCan
{
  /**
   * Returns whether the current user has the specified capability.
   *
   * @param string  $capability Capability name.
   * @param mixed   $args Optional further parameters, typically starting with an object ID.
   * @return bool   Whether the current user has the given capability.
   *                If $capability is a meta cap and $object_id is passed,
   *                whether the current user has the given meta capability for the given object.
   */
    public function currentUserCan(string $capability, mixed $args): bool;
}
