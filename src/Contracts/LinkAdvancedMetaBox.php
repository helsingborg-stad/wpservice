<?php

namespace WpService\Contracts;

interface LinkAdvancedMetaBox
{
    /**
     * Displays advanced link options form fields.
     *
     * @since 2.6.0
     *
     * @param object $link Current link object.
     */
    public function linkAdvancedMetaBox(object $link): void;
}
