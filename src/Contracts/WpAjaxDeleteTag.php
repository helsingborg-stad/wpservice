<?php

namespace WpService\Contracts;

interface WpAjaxDeleteTag
{
    /**
     * Handles deleting a tag via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxDeleteTag(): void;
}
