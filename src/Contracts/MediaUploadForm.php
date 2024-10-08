<?php

namespace WpService\Contracts;

interface MediaUploadForm
{
    /**
 * Outputs the legacy media upload form.
 *
 * @since 2.5.0
 *
 * @global string $type
 * @global string $tab
 *
 * @param array $errors
 */
    public function mediaUploadForm(array $errors = null): void;
}
