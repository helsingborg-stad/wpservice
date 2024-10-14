<?php

namespace WpService\Contracts;

interface WpAjaxDeletePost
{
/**
 * Handles deleting a post via AJAX.
 *
 * @since 3.1.0
 *
 * @param string $action Action to perform.
 */
    public function wpAjaxDeletePost(string $action): void;
}
