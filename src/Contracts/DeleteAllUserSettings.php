<?php

namespace WpService\Contracts;

interface DeleteAllUserSettings
{
/**
 * Deletes the user settings of the current user.
 *
 * @since 2.7.0
 */
    public function deleteAllUserSettings(): void;
}
