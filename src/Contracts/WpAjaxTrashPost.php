<?php

namespace WpService\Contracts;

interface WpAjaxTrashPost
{
    /**
     * Handles sending a post to the Trash via AJAX.
     *
     * @since 3.1.0
     *
     * @param string $action Action to perform.
     */
    public function wpAjaxTrashPost(string $action): void;
}
