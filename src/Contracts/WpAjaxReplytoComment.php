<?php

namespace WpService\Contracts;

interface WpAjaxReplytoComment
{
    /**
     * Handles replying to a comment via AJAX.
     *
     * @since 3.1.0
     *
     * @param string $action Action to perform.
     */
    public function wpAjaxReplytoComment(string $action): void;
}
