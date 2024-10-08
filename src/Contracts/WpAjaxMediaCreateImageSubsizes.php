<?php

namespace WpService\Contracts;

interface WpAjaxMediaCreateImageSubsizes
{
    /**
     * Handles creating missing image sub-sizes for just uploaded images via AJAX.
     *
     * @since 5.3.0
     */
    public function wpAjaxMediaCreateImageSubsizes(): void;
}
