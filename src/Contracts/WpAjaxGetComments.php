<?php

namespace WpService\Contracts;

interface WpAjaxGetComments
{
/**
 * Handles getting comments via AJAX.
 *
 * @since 3.1.0
 *
 * @global int $post_id
 *
 * @param string $action Action to perform.
 */
    public function wpAjaxGetComments(string $action): void;
}
