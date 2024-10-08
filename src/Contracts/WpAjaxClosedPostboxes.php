<?php

namespace WpService\Contracts;

interface WpAjaxClosedPostboxes
{
    /**
     * Handles closed post boxes via AJAX.
     *
     * @since 3.1.0
     */
    public function wpAjaxClosedPostboxes(): void;
}
