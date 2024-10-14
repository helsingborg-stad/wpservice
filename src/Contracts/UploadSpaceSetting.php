<?php

namespace WpService\Contracts;

interface UploadSpaceSetting
{
/**
 * Displays the site upload space quota setting form on the Edit Site Settings screen.
 *
 * @since 3.0.0
 *
 * @param int $id The ID of the site to display the setting for.
 */
    public function uploadSpaceSetting(int $id): void;
}
