<?php

namespace WpService\Contracts;

interface LinkTargetMetaBox
{
    /**
     * Displays form fields for changing link target.
     *
     * @since 2.6.0
     *
     * @param object $link Current link object.
     */
    public function linkTargetMetaBox(object $link): void;
}
