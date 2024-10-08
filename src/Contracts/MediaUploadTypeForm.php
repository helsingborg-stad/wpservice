<?php

namespace WpService\Contracts;

interface MediaUploadTypeForm
{
    /**
 * Outputs the legacy media upload form for a given media type.
 *
 * @since 2.5.0
 *
 * @param string $type
 * @param array $errors
 * @param int|\WP_Error $id
 */
    public function mediaUploadTypeForm(string $type = 'file', array $errors = null, int|\WP_Error $id = null): void;
}
