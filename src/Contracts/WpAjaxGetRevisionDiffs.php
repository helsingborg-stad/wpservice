<?php

namespace WpService\Contracts;

interface WpAjaxGetRevisionDiffs
{
/**
 * Handles getting revision diffs via AJAX.
 *
 * @since 3.6.0
 */
    public function wpAjaxGetRevisionDiffs(): void;
}
