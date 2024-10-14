<?php

namespace WpService\Contracts;

interface WpAjaxFindPosts
{
/**
 * Handles querying posts for the Find Posts modal via AJAX.
 *
 * @see window.findPosts
 *
 * @since 3.1.0
 */
    public function wpAjaxFindPosts(): void;
}
