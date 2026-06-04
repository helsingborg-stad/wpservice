<?php

namespace WpService\Contracts;

interface MediaUploadTypeUrlForm
{
/**
 * Outputs the legacy media upload form for external media.
 *
 * @since 2.7.0
 *
 * @param string $type
 * @param object $errors
 * @param int $id
 */
    public function mediaUploadTypeUrlForm(string|null $type = null, object|null $errors = null, int|null $id = null): void;
}
