<?php

namespace WpService\Contracts;

interface MediaUploadGalleryForm
{
    /**
     * Adds gallery form to upload iframe.
     *
     * @since 2.5.0
     *
     * @global string $redir_tab
     * @global string $type
     * @global string $tab
     *
     * @param array $errors
     */
    public function mediaUploadGalleryForm(array $errors): void;
}
