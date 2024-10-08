<?php

namespace WpService\Contracts;

interface WpAjaxDeleteComment
{
    /**
 * Handles deleting a comment via AJAX.
 *
 * @since 3.1.0
 */
    public function wpAjaxDeleteComment(): void;
}
