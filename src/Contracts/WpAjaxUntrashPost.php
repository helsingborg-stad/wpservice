<?php

namespace WpService\Contracts;

interface WpAjaxUntrashPost
{
/**
 * Handles restoring a post from the Trash via AJAX.
 *
 * @since 3.1.0
 *
 * @param string $action Action to perform.
 */
    public function wpAjaxUntrashPost(string $action): void;
}
