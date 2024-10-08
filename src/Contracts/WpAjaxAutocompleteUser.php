<?php

namespace WpService\Contracts;

interface WpAjaxAutocompleteUser
{
    /**
     * Handles user autocomplete via AJAX.
     *
     * @since 3.4.0
     */
    public function wpAjaxAutocompleteUser(): void;
}
